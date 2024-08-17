<?php
use App\Controllers\ProfileController;

return [
    "/users" => [ProfileController::class, "edit"],
    "/users/profile" => [ProfileController::class, "view"],
    "/users/profile/edit" => [ProfileController::class, "edit"],
];