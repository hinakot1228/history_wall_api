<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class SampleController extends Controller
{
    public function apiHello(){
        $question = Question::find(1);

        return response()->json(
            [
                'id' => $question->id,
                'period' => $question->period,
                'name' => $question->name,
                'questionOptions'=> array(
                    array(
                        'questionText' => $question->question_text_1_1,
                        'answerText' => $question->answer_text_1_1,
                    ),
                    array(
                        'questionText' => $question->question_text_2_1,
                        'answerText' => $question->answer_text_2_1,
                    ),
                    array(
                        'questionText' => $question->question_text_3_1,
                        'answerText' => $question->answer_text_3_1,
                    ),
                    array(
                        'questionText' => $question->question_text_4_1,
                        'answerText' => $question->answer_text_4_1,
                    ),
                ),
                'questionOptionsSecond'=> array(
                    array(
                        'questionText' => $question->question_text_1_2,
                        'answerText' => $question->answer_text_1_2,
                    ),
                    array(
                        'questionText' => $question->question_text_2_2,
                        'answerText' => $question->answer_text_2_2,
                    ),
                    array(
                        'questionText' => $question->question_text_3_2,
                        'answerText' => $question->answer_text_3_2,
                    ),
                    array(
                        'questionText' => $question->question_text_4_2,
                        'answerText' => $question->answer_text_4_2,
                    ),
                ),
                'questionOptionsThird'=> array(
                    array(
                        'questionText' => $question->question_text_1_3,
                        'answerText' => $question->answer_text_1_3,
                    ),
                    array(
                        'questionText' => $question->question_text_2_3,
                        'answerText' => $question->answer_text_2_3,
                    ),
                    array(
                        'questionText' => $question->question_text_3_3,
                        'answerText' => $question->answer_text_3_3,
                    ),
                    array(
                        'questionText' => $question->question_text_4_3,
                        'answerText' => $question->answer_text_4_3,
                    ),
                ),
                'questionOptionsFourth'=> array(
                    array(
                        'questionText' => $question->question_text_1_4,
                        'answerText' => $question->answer_text_1_4,
                    ),
                    array(
                        'questionText' => $question->question_text_2_4,
                        'answerText' => $question->answer_text_2_4,
                    ),
                    array(
                        'questionText' => $question->question_text_3_4,
                        'answerText' => $question->answer_text_3_4,
                    ),
                    array(
                        'questionText' => $question->question_text_4_4,
                        'answerText' => $question->answer_text_4_4,
                    ),
                ),
                'questionOptionsFifth'=> array(
                    array(
                        'questionText' => null,
                        'answerText' => null,
                    ),
                    array(
                        'questionText' => null,
                        'answerText' => null,
                    ),
                    array(
                        'questionText' => null,
                        'answerText' => null,
                    ),
                    array(
                        'questionText' => null,
                        'answerText' => null,
                    ),
                ),
                'image_path' => $question->image_path,
                'dialogue' => $question->dialogue,
                'explanation' => $question->explanation,
            ]
        );
    }
}
