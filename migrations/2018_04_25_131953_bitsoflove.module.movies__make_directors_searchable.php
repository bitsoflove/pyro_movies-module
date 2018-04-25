<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class BitsofloveModuleMoviesMakeDirectorsSearchable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->streams()->findBySlugAndNamespace('directors', 'movies')->setAttribute('searchable', true)->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->streams()->findBySlugAndNamespace('directors', 'movies')->setAttribute('searchable', false)->save();
    }
}
