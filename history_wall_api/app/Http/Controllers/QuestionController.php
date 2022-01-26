<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create(){
        return view('create');
    }
    
    public function store(Request $request)
    {
        $question = new Question;
        $question->name = $request->name;
        $question->question_text_1_1 = $request->question_text_1_1;
        $question->answer_text_1_1 = $request->answer_text_1_1;
        $question->question_text_1_2 = $request->question_text_1_2;
        $question->answer_text_1_2 = $request->answer_text_1_2;
        $question->question_text_1_3 = $request->question_text_1_3;
        $question->answer_text_1_3 = $request->answer_text_1_3;
        $question->question_text_1_4 = $request->question_text_1_4;
        $question->answer_text_1_4 = $request->answer_text_1_4;
        $question->question_text_2_1 = $request->question_text_2_1;
        $question->answer_text_2_1 = $request->answer_text_2_1;
        $question->question_text_2_2 = $request->question_text_2_2;
        $question->answer_text_2_2 = $request->answer_text_2_2;
        $question->question_text_2_3 = $request->question_text_2_3;
        $question->answer_text_2_3 = $request->answer_text_2_3;
        $question->question_text_2_4 = $request->question_text_2_4;
        $question->answer_text_2_4 = $request->answer_text_2_4;
        $question->question_text_3_1 = $request->question_text_3_1;
        $question->answer_text_3_1 = $request->answer_text_3_1;
        $question->question_text_3_2 = $request->question_text_3_2;
        $question->answer_text_3_2 = $request->answer_text_3_2;
        $question->question_text_3_3 = $request->question_text_3_3;
        $question->answer_text_3_3 = $request->answer_text_3_3;
        $question->question_text_3_4 = $request->question_text_3_4;
        $question->answer_text_3_4 = $request->answer_text_3_4;
        $question->question_text_4_1 = $request->question_text_4_1;
        $question->answer_text_4_1 = $request->answer_text_4_1;
        $question->question_text_4_2 = $request->question_text_4_2;
        $question->answer_text_4_2 = $request->answer_text_4_2;
        $question->question_text_4_3 = $request->question_text_4_3;
        $question->answer_text_4_3 = $request->answer_text_4_3;
        $question->question_text_4_4 = $request->question_text_4_4;
        $question->answer_text_4_4 = $request->answer_text_4_4;
        $question->image_path = $request->image_path;
        $question->position = $request->position;
        $question->explanation = $request->explanation;

        $question->save();

        return redirect()->route('questions.index');
    }

    public function index()
    {
        $questions = Question::all();
        // dd($questions);

        return view('index', ['questions'=>$questions]);
    }

    public function show($id)
    {
        $question = Question::find($id);
        // dd($question);

        return view('show', ['question'=>$question]);
    }

    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions.edit', ['question'=>$question]);
    }

    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $question->name = $request->name;
        $question->question_text_1_1 = $request->question_text_1_1;
        $question->answer_text_1_1 = $request->answer_text_1_1;
        $question->question_text_1_2 = $request->question_text_1_2;
        $question->answer_text_1_2 = $request->answer_text_1_2;
        $question->question_text_1_3 = $request->question_text_1_3;
        $question->answer_text_1_3 = $request->answer_text_1_3;
        $question->question_text_1_4 = $request->question_text_1_4;
        $question->answer_text_1_4 = $request->answer_text_1_4;
        $question->question_text_2_1 = $request->question_text_2_1;
        $question->answer_text_2_1 = $request->answer_text_2_1;
        $question->question_text_2_2 = $request->question_text_2_2;
        $question->answer_text_2_2 = $request->answer_text_2_2;
        $question->question_text_2_3 = $request->question_text_2_3;
        $question->answer_text_2_3 = $request->answer_text_2_3;
        $question->question_text_2_4 = $request->question_text_2_4;
        $question->answer_text_2_4 = $request->answer_text_2_4;
        $question->question_text_3_1 = $request->question_text_3_1;
        $question->answer_text_3_1 = $request->answer_text_3_1;
        $question->question_text_3_2 = $request->question_text_3_2;
        $question->answer_text_3_2 = $request->answer_text_3_2;
        $question->question_text_3_3 = $request->question_text_3_3;
        $question->answer_text_3_3 = $request->answer_text_3_3;
        $question->question_text_3_4 = $request->question_text_3_4;
        $question->answer_text_3_4 = $request->answer_text_3_4;
        $question->question_text_4_1 = $request->question_text_4_1;
        $question->answer_text_4_1 = $request->answer_text_4_1;
        $question->question_text_4_2 = $request->question_text_4_2;
        $question->answer_text_4_2 = $request->answer_text_4_2;
        $question->question_text_4_3 = $request->question_text_4_3;
        $question->answer_text_4_3 = $request->answer_text_4_3;
        $question->question_text_4_4 = $request->question_text_4_4;
        $question->answer_text_4_4 = $request->answer_text_4_4;
        $question->image_path = $request->image_path;
        $question->position = $request->position;
        $question->explanation = $request->explanation;

        $question->save();

        $questions = Question::all();
        return view('index', ['questions'=>$questions]);
    }

    public function getQuestion($id){
        $question = Question::find($id);

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
