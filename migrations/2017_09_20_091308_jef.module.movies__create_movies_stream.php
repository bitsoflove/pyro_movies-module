<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class JefModuleMoviesCreateMoviesStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'movies',
         'title_column' => 'title',
         'translatable' => true,
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


        'synopsis' => [
            'type' =>'anomaly.field_type.textarea',
        ],

        'director' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => Bitsoflove\MoviesModule\Director\DirectorModel::class,
            ],
        ],

        'release_year' => [
            'type' =>'anomaly.field_type.integer',
            "config" => [
                "step"      => 1,
                "min"       => 1900,
                "max"       => 2100,
            ]
        ],

        'duration' => [
            'type' =>'anomaly.field_type.text',
            "config" => [
                "mask"          => "00:00:00",
            ]
        ],

        'spoken_language' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => Jef\LanguagesModule\Language\LanguageModel::class,
            ],
        ],

        'subtitle_language' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'related' => Jef\LanguagesModule\Language\LanguageModel::class,
            ],
        ],

        'image' => [
            'type' =>'anomaly.field_type.image',
        ],

        'url_trailer' => [
            'type' =>'anomaly.field_type.text',
        ],

        'meta' => [
            'type' =>'anomaly.field_type.textarea',
        ],
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'translatable' => true,
            'required' => true,
        ],

        'slug' => [
            'unique' => true,
            'required' => false,
            "config" => [
                "type"      => "_",
                "slugify"   => 'title',
            ]
        ],

        'synopsis' => [
            'translatable' => true,
            'required' => true,
        ],

        'director' => [
            'translatable' => false,
            'required' => false,
        ],

        'release_year' => [
            'unique' => false,
            'required' => false,
            'translatable' => false
        ],

        'duration' => [
            'unique' => false,
            'required' => false,
            'translatable' => false
        ],

        'spoken_language' => [
            'unique' => false,
            'required' => false,
            'translatable' => false
        ],

        'subtitle_language' => [
            'unique' => false,
            'required' => false,
            'translatable' => false
        ],

        'image' => [
            'unique' => false,
            'required' => false,
            'translatable' => false,

        ],

        'url_trailer' => [
            'unique' => true,
            'required' => false,
            'translatable' => false,

        ],

        'meta' => [
            'unique' => false,
            'required' => false,
            'translatable' => false
        ],

    ];

}
