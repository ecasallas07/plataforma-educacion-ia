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
        Schema::create('answer_activities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->string('title')->nullable();
            $table->foreign('user_id ')->references('id')->on('users')->onDelete('cascade');
            $table->string('file')->nullable();
            $table->dateTimeTz('date_upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_activities');
    }
};
