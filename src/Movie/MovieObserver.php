<?php namespace Bitsoflove\MoviesModule\Movie;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;

class MovieObserver extends EntryObserver
{

    /**
     * Run before a record is created.
     *
     * @param EntryInterface $entry
     */
    public function creating(EntryInterface $entry)
    {

        $entry->setAttribute('slug', str_slug($entry->title, '_'));
        parent::creating($entry);
    }
}
