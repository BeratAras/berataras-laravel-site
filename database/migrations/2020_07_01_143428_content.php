<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Content extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('content_slug');
            $table->string('content_title');
            $table->longText('content_description');
            $table->string('content_file_banner');
            $table->string('content_in_banner');
            $table->string('content_user');
            $table->string('content_keywords');
            $table->string('content_hit');
            $table->unsignedBigInteger('category_id');
            $table->integer('content_status');
            $table->timestamps();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content');
    }
}
