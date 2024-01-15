<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('news_id')->nullable(); // Nullable if you want 'set null' behavior
            $table->unsignedBigInteger('user_id')->nullable(); // Nullable if you want 'set null' behavior    
            $table->text('comment');
            $table->timestamps();
        
            $table->foreign('news_id')->references('id')->on('news')->onDelete('set null'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
