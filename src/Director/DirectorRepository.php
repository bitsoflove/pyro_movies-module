<?php namespace Bitsoflove\MoviesModule\Director;

use Bitsoflove\MoviesModule\Director\Contract\DirectorRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

class DirectorRepository extends EntryRepository implements DirectorRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var DirectorModel
     */
    protected $model;

    /**
     * Create a new DirectorRepository instance.
     *
     * @param DirectorModel $model
     */
    public function __construct(DirectorModel $model)
    {
        $this->model = $model;
    }
}
