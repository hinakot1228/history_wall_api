@extends('layouts.base')
 
@section('title', '問題詳細')
 
@section('content')
    <h4>問題詳細</h4>
    <form class="row g-3" action="{{ route('questions.update', $question->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="input-group">
            <span class="input-group-text">名前</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value={{ old('name', $question->name) }}>
        </div>
        <div class="input-group">
            <span class="input-group-text">時代</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="period" value={{ old('period', $question->period) }}>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_1">{{ $question->question_text_1_1 }}</textarea>
            <span class="input-group-text">回答1-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_1">{{ $question->answer_text_1_1 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_2">{{ $question->question_text_1_2 }}</textarea>
            <span class="input-group-text">回答1-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_2">{{ $question->answer_text_1_2 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_3">{{ $question->question_text_1_3 }}</textarea>
            <span class="input-group-text">回答1-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_3">{{ $question->answer_text_1_3 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_4">{{ $question->question_text_1_4 }}</textarea>
            <span class="input-group-text">回答1-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_4">{{ $question->answer_text_1_4 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_1">{{ $question->question_text_2_1 }}</textarea>
            <span class="input-group-text">回答2-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_1">{{ $question->answer_text_2_1 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_2">{{ $question->question_text_2_2 }}</textarea>
            <span class="input-group-text">回答2-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_2">{{ $question->answer_text_2_2 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_3">{{ $question->question_text_2_3 }}</textarea>
            <span class="input-group-text">回答2-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_3">{{ $question->answer_text_2_3 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_4">{{ $question->question_text_2_4 }}</textarea>
            <span class="input-group-text">回答2-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_4">{{ $question->answer_text_2_4 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_1">{{ $question->question_text_3_1 }}</textarea>
            <span class="input-group-text">回答3-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_1">{{ $question->answer_text_3_1 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_2">{{ $question->question_text_3_2 }}</textarea>
            <span class="input-group-text">回答3-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_2">{{ $question->answer_text_3_2 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_3">{{ $question->question_text_3_3 }}</textarea>
            <span class="input-group-text">回答3-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_3">{{ $question->answer_text_3_3 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_4">{{ $question->question_text_3_4 }}</textarea>
            <span class="input-group-text">回答3-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_4">{{ $question->answer_text_3_4 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_1">{{ $question->question_text_4_1 }}</textarea>
            <span class="input-group-text">回答4-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_1">{{ $question->answer_text_4_1 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_2">{{ $question->question_text_4_2 }}</textarea>
            <span class="input-group-text">回答4-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_2">{{ $question->answer_text_4_2 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_3">{{ $question->question_text_4_3 }}</textarea>
            <span class="input-group-text">回答4-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_3">{{ $question->answer_text_4_3 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_4">{{ $question->question_text_4_4 }}</textarea>
            <span class="input-group-text">回答4-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_4">{{ $question->answer_text_4_4 }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">画像</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="image_path" value={{ old('image_path', $question->image_path) }}>
        </div>
        <div class="input-group">
            <span class="input-group-text">肩書き</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="position" value={{ old('position', $question->position) }}>
        </div>
        <div class="input-group">
            <span class="input-group-text">説明文</span>
            <textarea class="form-control" aria-label="With textarea" name="explanation">{{ $question->explanation }}</textarea>
        </div>
        <div class="col-12 show_button_container">
            <a href="{{ url('/questions') }}" class="btn btn-outline-secondary">戻る</a>
            <button type="submit" class="btn btn-outline-success">変更を保存</button>
        </div>
    </form>
@endsection