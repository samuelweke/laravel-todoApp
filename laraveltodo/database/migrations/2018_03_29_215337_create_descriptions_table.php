<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('list_id')->unsigned()->index();
            $table->foreign('list_id')->references('id')->on('mylists');
            $table->string('details');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('descriptions');
        $table->dropColum('list_id');
    }
}
