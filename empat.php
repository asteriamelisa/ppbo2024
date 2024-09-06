<?php
// Kelas Author
class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type) {
        // Logika untuk mengembalikan array berdasarkan $type
        return [
            'name' => $this->name,
            'description' => $this->description
        ];
    }
}

// Kelas Book
class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher
        ];
    }

    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
        return null;
    }
}

// Kelas Publisher
class Publisher {
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

// Contoh Penggunaan
$author = new Author("J.K. Rowling", "Famous author of Harry Potter series");
$publisher = new Publisher("Bloomsbury", "London", "123456789");

$book = new Book(1234567890, "Harry Potter", "A magical story", "Fantasy", "English", 500, $author->name, $publisher->name);

// Tampilkan detail buku
print_r($book->showAll());

// Dapatkan nomor telepon penerbit
echo $publisher->getPhone();

?>
