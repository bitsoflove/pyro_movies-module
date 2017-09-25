<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BitsofloveModuleMoviesCreateGlobalFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => [
            'type' =>'anomaly.field_type.text',
        ],

        'slug' => [
            'type' =>'anomaly.field_type.slug',
        ],


        'name' => [
            'type' =>'anomaly.field_type.text',
        ],

        'meta' => [
            'type' =>'anomaly.field_type.textarea',
        ],
    ];

}
