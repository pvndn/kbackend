<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('name', 60);
            $table->string('slug', 60);
            $table->mediumText('icon');
            $table->mediumText('style');

            $table->integer('parent_id')->nullable()->index();
            $table->integer('lft')->nullable()->index();
            $table->integer('rgt')->nullable()->index();
            $table->integer('depth')->nullable();

            $table->tinyInteger('sort_order');

            $table->string('set_title', 60);
            $table->string('meta_desc', 160);
            $table->string('meta_key', 160);

            $table->enum('publish', [0, 1]);
            $table->timestamps();
        });

        Schema::create('category_info', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name', 60);
            $table->string('url');
            $table->string('image', 60);

            $table->integer('category_id')->unsigned();
            
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('cascade')->onUpdate('cascade');

            $table->enum('banner', [0, 1])->default(0);

            $table->enum('publish', [0, 1])->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category_info');
        Schema::drop('categories');
    }
}
