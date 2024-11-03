<?php

namespace App\Model\Pustaka;

use App\Model\Model;

class Book extends Model
{
    public int $id;
    public string $isbn;
    public string $title;
    public string $description;
    public string $language;
    public int $numberOfPage;
    public int $category_id;
    public int $publisher_id;
    public int $author_id;

    public ?string $categoryName;
    public ?string $publisherName;
    public ?string $authorName;

    public function save()
    {
        try {
            $this->db->beginTransaction();

            $stmt = $this->db->prepare("INSERT INTO book (id, isbn, title, description, language, numberOfPage, category_id, publisher_id) 
                                        VALUES (:id, :isbn, :title, :description, :language, :numberOfPage, :category_id, :publisher_id)");

            $stmt->bindParam(':id', $this->id);
            $stmt->bindParam(':isbn', $this->isbn);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':description', $this->description);
            $stmt->bindParam(':language', $this->language);
            $stmt->bindParam(':numberOfPage', $this->numberOfPage);
            $stmt->bindParam(':category_id', $this->category_id);
            $stmt->bindParam(':publisher_id', $this->publisher_id);

            $status = $stmt->execute();

            $stmt = $this->db->prepare("INSERT INTO book_author (book_id, author_id) VALUES (:book_id, :author_id)");
            $stmt->bindParam(':book_id', $this->id);
            $stmt->bindParam(':author_id', $this->author_id);
            $stmt->execute();

            $this->db->commit();

            return [
                'status' => $status,
                'id' => $this->id
            ];
        } catch (\PDOException $e) {
            $this->db->rollBack();
            http_response_code(500);
            return ["message" => $e->getMessage()];
        }
    }

    public static function all(): array
    {
        $books = [];
        $model = new Model();
        $db = $model->getDB();
        $stmt = $db->prepare("SELECT book.*, 
            category.name AS categoryName,
            publisher.name AS publisherName,
            author.name AS authorName
            FROM book
            LEFT JOIN category ON category.id = book.category_id
            LEFT JOIN publisher ON publisher.id = book.publisher_id
            LEFT JOIN book_author ON book_author.book_id = book.id
            LEFT JOIN author ON author.id = book_author.author_id");

        if ($stmt->execute()) {
            $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            foreach ($results as $key => $item) {
                $books[$key] = [
                    'id' => $item['id'],
                    'isbn' => $item['isbn'],
                    'title' => $item['title'],
                    'description' => $item['description'],
                    'language' => $item['language'],
                    'numberOfPage' => $item['numberOfPage'],
                    'category' => [
                        'id' => $item['category_id'],
                        'name' => $item['categoryName']
                    ],
                    'publisher' => [
                        'id' => $item['publisher_id'],
                        'name' => $item['publisherName']
                    ]
                ];
            }
        }
        return $books;
    }


    public function detail($id)
    {
        $stmt = $this->db->prepare("SELECT book.*, 
            category.name AS categoryName,
            publisher.name AS publisherName,
            author.name AS authorName
            FROM book
            LEFT JOIN category ON category.id = book.category_id
            LEFT JOIN publisher ON publisher.id = book.publisher_id
            LEFT JOIN book_author ON book_author.book_id = book.id
            LEFT JOIN author ON author.id = book_author.author_id
            WHERE book.id = :id");
        $stmt->bindParam(':id', $id);

        if ($stmt->execute()) {
            $books = $stmt->fetch(\PDO::FETCH_ASSOC);
            if ($books) {
                return [
                    'id' => $books['id'],
                    'isbn' => $books['isbn'],
                    'title' => $books['title'],
                    'description' => $books['description'],
                    'language' => $books['language'],
                    'numberOfPage' => $books['numberOfPage'],
                    'category' => [
                        'id' => $books['category_id'],
                        'name' => $books['categoryName']
                    ],
                    'publisher' => [
                        'id' => $books['publisher_id'],
                        'name' => $books['publisherName']
                    ],
                    'author' => [
                        'name' => $books['authorName']
                    ]
                ];
            }
        }
        return null;
    }

    public function show(): array
    {
        return [];
    }
}