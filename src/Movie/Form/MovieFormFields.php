<?php namespace Bitsoflove\MoviesModule\Movie\Form;

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
class MovieFormFields
{
    use DispatchesJobs;



    /**
     * Handle the form sections.
     * @param MovieFormBuilder $builder
     */
    public function handle(MovieFormBuilder $builder)
    {
        $builder->setFields(['*']);
    }


}
