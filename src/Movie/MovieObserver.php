<?php

namespace Bitsoflove\MoviesModule\Movie;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\Streams\Platform\Entry\EntryObserver;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieObserver extends EntryObserver
{

    /**
     * Run before a record is created.
     *
     * @param EntryInterface $entry
     */
    public function creating(EntryInterface $entry)
    {
        $slug = Str::slug($entry->title, '_');

        if(DB::table('movies_movies')
            ->where('slug', '=', $slug)
            ->count()){

            $prefix = $slug;
            $suffix = 1;
            $slug = implode('_', [$prefix, $suffix]);

            while(DB::table('movies_movies')
                ->where('slug', '=', $slug)
                ->count()){
                $suffix ++;
                $slug = implode('_', [$prefix, $suffix]);
            }
        }

        $entry->setAttribute('slug', $slug);
        parent::creating($entry);
    }
}
