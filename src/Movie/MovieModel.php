<?php namespace Bitsoflove\MoviesModule\Movie;

use Bitsoflove\MoviesModule\Movie\Contract\MovieInterface;
use Anomaly\Streams\Platform\Model\Movies\MoviesMoviesEntryModel;

class MovieModel extends MoviesMoviesEntryModel implements MovieInterface
{
    protected $with = ['translations','director'];
}
