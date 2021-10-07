<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBirthplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('birthplaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->index();
            // $table->foreign('birthplace_id')              // birthplace_idに外部キーを設定する
            //     ->references('id')->on('birthplaces')    // birthplacesテーブルのidカラムを外部キーにする
            //     ->onDelete('restrict');                 // 参照先の削除を禁止する
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(
            'articles',
            function (Blueprint $table) {
                $table->dropForeign('articles_birthplace_id_foreign'); //外部キー制約の削除
                $table->dropColumn('birthplace_id');                      //カラム削除
            }
        );
    }
}
