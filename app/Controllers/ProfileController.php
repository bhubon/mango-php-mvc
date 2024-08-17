<?php

namespace App\Controllers;

class ProfileController extends Controller {

    public function edit() {


        return view("post/post", [
            "message" => "Hello from controller",
        ]);
    }
}