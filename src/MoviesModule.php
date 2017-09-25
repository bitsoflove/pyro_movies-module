<?php namespace Bitsoflove\MoviesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

class MoviesModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    protected $icon = 'fa fa-film';

    /**
     * The module sections.
     *
     * @var array
     */
    protected $sections = [
        'movies' => [
            'buttons' => [
                'new_movie',
                'assignments',
            ],
        ],
        'directors' => [
            'buttons' => [
                'new_director',
            ],
        ],

        'fields'     => [
            'buttons'  => [
                'new_field' => [
                    'data-toggle' => 'modal',
                    'data-target' => '#modal',
                    'href'        => 'admin/movies/fields/choose',
                ],
            ],

            'sections' => [
                'assignments' => [
                    'hidden'  => true,
                    'href'    => 'admin/movies/fields/assignments/{request.route.parameters.stream}',
                    'buttons' => [
                        'assign_fields' => [
                            'data-toggle' => 'modal',
                            'data-target' => '#modal',
                            'href'        => 'admin/movies/fields/assignments/{request.route.parameters.stream}/choose',
                        ],
                    ],
                ],
            ],
        ],
    ];

}
