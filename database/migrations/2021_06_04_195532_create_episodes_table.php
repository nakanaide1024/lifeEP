<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('episodes')){

            Schema::create('episodes', function (Blueprint $table) {
                $table->id();
                $table->string('title', 100);
                $table->text('remarks')->nullable();
                $table->integer('category');
                $table->foreignId('user_id');
                $table->timestamps();
    
                $table->foreign('user_id')
                      ->references('id')
                      ->on('users');
            });
          }
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodes');
    }
}
