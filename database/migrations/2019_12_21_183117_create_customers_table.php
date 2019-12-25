<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('avatar')->nullable();
            $table->string('email', 50)->unique();
            $table->string('city');
            $table->string('district');
            $table->string('wards');
            $table->string('address');
            $table->integer('phone_number');
            $table->integer('company_name')->nullable();
            $table->integer('tax_code')->nullable();
            $table->integer('company_address')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
