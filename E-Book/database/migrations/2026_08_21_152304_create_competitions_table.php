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
        Schema::create('competitions', function (Blueprint $table) {
             $table->id();
            $table->string('title');
            $table->string('topic');
            $table->string('type');
            $table->text('description')->nullable();
            $table->dateTime('deadline'); // last date/time to enroll or submit
            $table->string('status');
            $table->string('first_prize')->nullable();
            $table->string('second_prize')->nullable();
            $table->string('third_prize')->nullable();
            $table->unsignedInteger('time'); // essay-writing duration, in minutes
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
