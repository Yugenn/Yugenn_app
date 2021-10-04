<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday');
            $table->integer('age');
            $table->unsignedInteger('birthplace_id');
            $table->foreign('birthplace_id')              // birthplace_idに外部キーを設定する
                ->references('id')->on('birthplaces')    // birthplacesテーブルのidカラムを外部キーにする
                ->onDelete('restrict');          
            $table->string('sex');
            $table->string('comment');
            $table->text('image');
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
        Schema::dropIfExists('articles');
    }
}
