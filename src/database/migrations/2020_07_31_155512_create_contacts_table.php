<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_kana');
            $table->string('zip_code')->nullable();
            $table->integer('prefecture')->nullable();
            $table->string('city')->nullable();
            $table->string('street_number')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->unique();
            $table->integer('request_contact')->nullable();
            $table->string('contact_message')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
