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
        Schema::create('externals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('source_id')
                ->references('id')
                ->on('sources')
                ->restrictOnDelete();
            $table->string('author',255);
            $table->string('title',255);
            $table->text('description');
            $table->string('url',255);
            $table->string('image',255);
            $table->date('published_at');
            $table->text('content');
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
        Schema::dropIfExists('externals');
    }
};
