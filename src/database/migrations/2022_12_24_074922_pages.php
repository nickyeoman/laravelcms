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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Title that appears as h1 and links');
            $table->string('heading')->nullable()->comment('When you want a different title displayed.');
            $table->string('description')->nullable()->comment('Head meta description');
            $table->string('keywords')->nullable()->comment('Head meta keywords');
            $table->string('author')->nullable();
            $table->string('slug')->comment('used in url');
            $table->string('path')->comment('If path is different');
            $table->text('intro')->nullable();
            $table->text('body')->comment('Main Content');
            $table->text('notes')->nullable()->comment('For internal use');
            $table->timestamps();
            $table->tinyInteger('draft')->default('1');
            $table->string('changefreq')->comment('sitemap');
            $table->decimal('priority')->comment('sitemap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
