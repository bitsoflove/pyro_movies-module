<?php namespace Bitsoflove\MoviesModule\Movie;

use Bitsoflove\MoviesModule\Movie\Contract\MovieRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class MovieRepository extends EntryRepository implements MovieRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var MovieModel
     */
    protected $model;

    /**
     * Create a new MovieRepository instance.
     *
     * @param MovieModel $model
     */
    public function __construct(MovieModel $model)
    {
        $this->model = $model;
    }
}
