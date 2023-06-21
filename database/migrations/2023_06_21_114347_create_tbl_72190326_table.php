<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbl72190326Table extends Migration
{
    public function up()
    {
        Schema::create('tbl_72190326', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('article_title');
            $table->date('article_date');
            $table->text('article_text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_72190326');
    }
}