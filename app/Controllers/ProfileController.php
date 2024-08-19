<?php

namespace App\Controllers;

use App\Models\Book;

class ProfileController extends Controller {

    public function edit() {
        $book = new Book();

        // print_r($book->getAll());

        return view("post/post", [
            "message" => "Hello from controller",
            "books" => $book->getAll(),
        ]);
    }
}