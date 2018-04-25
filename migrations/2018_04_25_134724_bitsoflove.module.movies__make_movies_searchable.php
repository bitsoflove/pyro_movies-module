<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BitsofloveModuleMoviesMakeMoviesSearchable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->streams()->findBySlugAndNamespace('movies', 'movies')->setAttribute('searchable', true)->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->streams()->findBySlugAndNamespace('movies', 'movies')->setAttribute('searchable', false)->save();
    }
}
