<?php namespace Bitsoflove\MoviesModule\Movie\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

class MovieTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'search' => [
            'columns' => [
                'title',
            ]
        ],
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'title',
        'director'
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */
    protected $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [
        'enable_pagination' => true,
        'limit' => 50,
    ];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
