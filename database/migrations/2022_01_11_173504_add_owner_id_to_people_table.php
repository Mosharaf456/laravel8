<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOwnerIdToPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('people', function (Blueprint $table) {
           //column add
           $table->unsignedBigInteger('owner_id');
            //foreign key add
            $table->foreign('owner_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
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
            $table->dropForeign('people_owner_id_foreign');
            $table->dropColumn('owner_id');
        });
    }
}
