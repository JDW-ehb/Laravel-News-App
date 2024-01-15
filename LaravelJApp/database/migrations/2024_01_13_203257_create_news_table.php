<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title');
            $table->string('cover_image')->nullable(); // URL to the image
            $table->text('summary');
            $table->text('content');
            $table->date('publishing_date')->useCurrent(); // Automatically set the current timestamp when a record is created
            $table->timestamps();

            // Ensure that the foreign key constraint is added after the column is defined.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
};
