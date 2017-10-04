<?php namespace Bitsoflove\MoviesModule\Movie\Table;

use Bitsoflove\MoviesModule\Movie\MovieModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Support\Collection;

/**
 * Class MovieFormSections
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class MovieTableColumns
{
    use DispatchesJobs;



    /**
     * Handle the form sections.
     * @param MovieTableBuilder $builder
     */
    public function handle(MovieTableBuilder $builder)
    {
        $builder->setColumns([
            'title',
            'director'
        ]);
    }


}
