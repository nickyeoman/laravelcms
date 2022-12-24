<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('contactForm', function (Blueprint $table) {
            $table->id();
            $table->string('email')->comment('Email address of the sender');
            $table->text('message');
            $table->dateTime('created');
            $table->tinyInteger(('unread'));
        });

        Schema::create('badEmails', function (Blueprint $table) {
            $table->id();
            $table->string('email')->comment('Email address blocked');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactForm');
        Schema::dropIfExists('badEmails');
    }
};
