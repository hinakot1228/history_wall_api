<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('period');
            $table->string('question_text_1_1');
            $table->string('answer_text_1_1');
            $table->string('question_text_1_2')->nullable();
            $table->string('answer_text_1_2')->nullable();
            $table->string('question_text_1_3')->nullable();
            $table->string('answer_text_1_3')->nullable();
            $table->string('question_text_1_4')->nullable();
            $table->string('answer_text_1_4')->nullable();
            $table->string('question_text_2_1');
            $table->string('answer_text_2_1');
            $table->string('question_text_2_2')->nullable();
            $table->string('answer_text_2_2')->nullable();
            $table->string('question_text_2_3')->nullable();
            $table->string('answer_text_2_3')->nullable();
            $table->string('question_text_2_4')->nullable();
            $table->string('answer_text_2_4')->nullable();
            $table->string('question_text_3_1');
            $table->string('answer_text_3_1');
            $table->string('question_text_3_2')->nullable();
            $table->string('answer_text_3_2')->nullable();
            $table->string('question_text_3_3')->nullable();
            $table->string('answer_text_3_3')->nullable();
            $table->string('question_text_3_4')->nullable();
            $table->string('answer_text_3_4')->nullable();
            $table->string('question_text_4_1');
            $table->string('answer_text_4_1');
            $table->string('question_text_4_2')->nullable();
            $table->string('answer_text_4_2')->nullable();
            $table->string('question_text_4_3')->nullable();
            $table->string('answer_text_4_3')->nullable();
            $table->string('question_text_4_4')->nullable();
            $table->string('answer_text_4_4')->nullable();
            $table->string('image_path');
            $table->string('dialogue');
            $table->string('position');
            $table->string('explanation');
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
        //
    }
}
