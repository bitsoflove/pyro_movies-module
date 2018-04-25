<?php

namespace Bitsoflove\MoviesModule\Director\Table;

use Illuminate\Foundation\Bus\DispatchesJobs;

class DirectorTableFilters
{
    use DispatchesJobs;

    public function handle(DirectorTableBuilder $builder)
    {
        $builder->setFilters([
            'search' => [
                'columns' => [
                    'name',
                ]
            ],
        ]);
    }
}
