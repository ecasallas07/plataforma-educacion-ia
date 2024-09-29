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
        Schema::table('evaluations_answers', function (Blueprint $table) {
            $table->unsignedBigInteger('question_id');
            $table->foreign('question_id')
            ->references('id')
            ->on('evaluations_questions')
            ->onDelete('cascade')
            ->name('evaluations_answers_question_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evaluations_answers', function (Blueprint $table) {
            $table->dropForeign('evaluations_answers_question_id_foreign');
            $table->dropColumn('question_id');
        });
    }
};
