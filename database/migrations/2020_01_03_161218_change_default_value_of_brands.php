<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeDefaultValueOfBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->integer('status')->default(1)->change();
            $table->string('meta_title')->nullable()->change();
            $table->string('meta_keywords')->nullable()->change();
            $table->string('meta_description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->integer('status')->change();
            $table->string('meta_title')->change();
            $table->string('meta_keywords')->change();
            $table->string('meta_description')->change();
        });
    }
}
