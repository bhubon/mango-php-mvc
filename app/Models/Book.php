<?php

namespace App\Models;

class Book extends Model {
    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM books");

        $stmt->execute();

        return $stmt->fetchAll();
    }
}