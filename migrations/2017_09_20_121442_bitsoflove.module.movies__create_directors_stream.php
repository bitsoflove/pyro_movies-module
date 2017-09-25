<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BitsofloveModuleMoviesCreateDirectorsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'directors',
         'title_column' => 'name',
         'translatable' => false,
         'trashable' => true,
         'searchable' => false,
         'sortable' => true,
    ];

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => false,
            'required' => true,
        ],
        'slug' => [
            'unique' => true,
            'required' => false,
            "config" => [
                "type"      => "_",
                "slugify"   => 'name',
            ]
        ],
    ];

}
