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
