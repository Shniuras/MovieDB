<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChainingForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('actor_movie', function(Blueprint $table){
            $table->foreign('actor_id')->references('id')->on('actors');
            $table->foreign('movie_id')->references('id')->on('movies');
        });

        Schema::table('actors',function(Blueprint $table){
           $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('images',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('movies',function(Blueprint $table){
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::table('categories',function(Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function(Blueprint $table){
            $table->dropForeign('categories_user_id');
        });

        Schema::table('movies', function(Blueprint $table){
            $table->dropForeign('movies_user_id');
            $table->dropForeign('movies_category_id');
        });

        Schema::table('images', function(Blueprint $table){
            $table->dropForeign('images_user_id');
        });

        Schema::table('actors', function(Blueprint $table){
            $table->dropForeign('actors_user_id');
        });

        Schema::table('actor_movie', function(Blueprint $table){
            $table->dropForeign('actor_movie_movie_id');
            $table->dropForeign('actor_movie_actor_id');
        });





    }
}
