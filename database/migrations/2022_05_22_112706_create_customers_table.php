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
            $table->id();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('telephone')->nullable();
            $table->string('streetNo')->nullable();
            $table->string('houseNo')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('owner')->nullable();
            $table->string('iban')->nullable();
            $table->string('paymentDataId')->nullable();            
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
