<?php

use Bitsoflove\MoviesModule\Http\Controller\Admin\FieldsController;
use Bitsoflove\MoviesModule\Http\Controller\Admin\AssignmentsController;

return [
    'admin/movies/fields' => [
        "uses" => FieldsController::class . '@index',
    ],
    'admin/movies/fields/choose' => [
        "uses" => FieldsController::class . '@choose',
    ],
    'admin/movies/fields/create' => [
        "uses" => FieldsController::class . '@create',
    ],
    'admin/movies/fields/edit/{id}' => [
        "uses" => FieldsController::class . '@edit',
    ],
    'admin/movies/fields/assignments/{stream}' => [
        "uses" => AssignmentsController::class . '@index',
    ],
    'admin/movies/fields/assignments/{stream}/choose' => [
        "uses" => AssignmentsController::class . '@choose',
    ],
    'admin/movies/fields/assignments/{stream}/create' => [
        "uses" => AssignmentsController::class . '@create',
    ],
    'admin/movies/fields/assignments/{stream}/edit/{assignment}' => [
        "uses" => AssignmentsController::class . '@edit',
    ],
];