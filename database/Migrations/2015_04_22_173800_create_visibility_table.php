<?php

use Illuminate\Database\Migrations\Migration;

class CreateVisibilityTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogify_visibility', function($table)
        {
            $table->increments('id');
            $table->string('hash', 80)->unique();
            $table->string('name', 25)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogify_visibility');
    }

}
