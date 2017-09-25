<?php namespace Bitsoflove\MoviesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Bitsoflove\MoviesModule\Director\Contract\DirectorRepositoryInterface;
use Bitsoflove\MoviesModule\Director\DirectorRepository;
use Anomaly\Streams\Platform\Model\Movies\MoviesDirectorsEntryModel;
use Bitsoflove\MoviesModule\Director\DirectorModel;
use Bitsoflove\MoviesModule\Movie\Contract\MovieRepositoryInterface;
use Bitsoflove\MoviesModule\Movie\MovieRepository;
use Anomaly\Streams\Platform\Model\Movies\MoviesMoviesEntryModel;
use Bitsoflove\MoviesModule\Movie\MovieModel;
use Illuminate\Routing\Router;

class MoviesModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/movies/directors'           => 'Bitsoflove\MoviesModule\Http\Controller\Admin\DirectorsController@index',
        'admin/movies/directors/create'    => 'Bitsoflove\MoviesModule\Http\Controller\Admin\DirectorsController@create',
        'admin/movies/directors/edit/{id}' => 'Bitsoflove\MoviesModule\Http\Controller\Admin\DirectorsController@edit',
        'admin/movies'           => 'Bitsoflove\MoviesModule\Http\Controller\Admin\MoviesController@index',
        'admin/movies/create'    => 'Bitsoflove\MoviesModule\Http\Controller\Admin\MoviesController@create',
        'admin/movies/edit/{id}' => 'Bitsoflove\MoviesModule\Http\Controller\Admin\MoviesController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Bitsoflove\MoviesModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * The addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Bitsoflove\MoviesModule\Event\ExampleEvent::class => [
        //    Bitsoflove\MoviesModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Bitsoflove\MoviesModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        MoviesDirectorsEntryModel::class => DirectorModel::class,
        MoviesMoviesEntryModel::class => MovieModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        DirectorRepositoryInterface::class => DirectorRepository::class,
        MovieRepositoryInterface::class => MovieRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
