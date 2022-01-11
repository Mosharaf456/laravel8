<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeUniqueSlugToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->unique('slug'); // people_slug_unique
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('people', function (Blueprint $table) {
            $table->dropUnique('people_slug_unique');
        });
    }
}
