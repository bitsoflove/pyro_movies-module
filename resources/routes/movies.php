<?php

use Bitsoflove\MoviesModule\Http\Controller\Admin\MoviesController as AdminController;

return [
    'admin/movies' => [
        "uses" => AdminController::class . '@index',
    ],
    'admin/movies/create' => [
        "uses" => AdminController::class . '@create',
    ],
    'admin/movies/edit/{id}' => [
        "uses" => AdminController::class . '@edit',
    ],
    'admin/movies/assignments' => [
        "uses" => AdminController::class . '@assignments',
    ],
];