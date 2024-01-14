<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactFormEntriesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_form_entries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('email');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_form_entries');
    }
}