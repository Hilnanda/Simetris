<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortofolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolio', function (Blueprint $table) {
            $table->id();
            $table->string('portofolio_image')->nullable();
            $table->string('portofolio_title')->nullable();
            $table->bigInteger('portofolio_category_id')->unsigned();
            $table->foreign('portofolio_category_id')->references('id')->on('category_portofolio')->onDelete('cascade');
            $table->string('portofolio_desc')->nullable();
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
        Schema::dropIfExists('portofolio');
    }
}
