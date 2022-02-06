<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>問題追加</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <p>create</p>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="row g-3" action="{{ route('questions.store') }}" method="POST">
        @csrf
        <div class="input-group">
            <span class="input-group-text">名前</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value="{{ old('name') }}">
        </div>
        <div class="input-group">
            <span class="input-group-text">時代</span>
            <select name="period" id="period">
                <option value=""></option>
                <option value="石器" @if(old('period')=='石器') selected  @endif>石器（旧・新石器）</option>
                <option value="縄文" @if(old('period')=='縄文') selected  @endif>縄文</option>
                <option value="弥生" @if(old('period')=='弥生') selected  @endif>弥生</option>
                <option value="古墳" @if(old('period')=='古墳') selected  @endif>古墳</option>
                <option value="飛鳥" @if(old('period')=='飛鳥') selected  @endif>飛鳥</option>
                <option value="奈良" @if(old('period')=='奈良') selected  @endif>奈良</option>
                <option value="平安" @if(old('period')=='平安') selected  @endif>平安</option>
                <option value="鎌倉" @if(old('period')=='鎌倉') selected  @endif>鎌倉</option>
                <option value="南北朝" @if(old('period')=='南北朝') selected  @endif>南北朝</option>
                <option value="室町" @if(old('period')=='室町') selected  @endif>室町</option>
                <option value="安土桃山" @if(old('period')=='安土桃山') selected  @endif>安土桃山</option>
                <option value="江戸" @if(old('period')=='江戸') selected  @endif>江戸</option>
                <option value="明治" @if(old('period')=='明治') selected  @endif>明治</option>
                <option value="大正" @if(old('period')=='大正') selected  @endif>大正</option>
                <option value="昭和" @if(old('period')=='昭和') selected  @endif>昭和</option>
                <option value="平成" @if(old('period')=='平成') selected  @endif>平成</option>
                <option value="令和" @if(old('period')=='令和') selected  @endif>令和</option>
            </select>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-1</span>
            <input name="question_text_1_1" list="question_text_1_1" value="{{ old('question_text_1_1') }}">
            <datalist id="question_text_1_1">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答1-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_1">{{ old('answer_text_1_1') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-2</span>
            <input name="question_text_1_2" list="question_text_1_2" value="{{ old('question_text_1_2') }}">
            <datalist id="question_text_1_2">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答1-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_2">{{ old('answer_text_1_2') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-3</span>
            <input name="question_text_1_3" list="question_text_1_3" value="{{ old('question_text_1_3') }}">
            <datalist id="question_text_1_3">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答1-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_3">{{ old('answer_text_1_3') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-4</span>
            <input name="question_text_1_4" list="question_text_1_4" value="{{ old('question_text_1_4') }}">
            <datalist id="question_text_1_4">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答1-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_4">{{ old('answer_text_1_4') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-1</span>
            <input name="question_text_2_1" list="question_text_2_1" value="{{ old('question_text_2_1') }}">
            <datalist id="question_text_2_1">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答2-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_1">{{ old('answer_text_2_1') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-2</span>
            <input name="question_text_2_2" list="question_text_2_2" value="{{ old('question_text_2_2') }}">
            <datalist id="question_text_2_2">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答2-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_2">{{ old('answer_text_2_2') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-3</span>
            <input name="question_text_2_3" list="question_text_2_3" value="{{ old('question_text_2_3') }}">
            <datalist id="question_text_2_3">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答2-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_3">{{ old('answer_text_2_3') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-4</span>
            <input name="question_text_2_4" list="question_text_2_4" value="{{ old('question_text_2_4') }}">
            <datalist id="question_text_2_4">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答2-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_4">{{ old('answer_text_2_4') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-1</span>
            <input name="question_text_3_1" list="question_text_3_1" value="{{ old('question_text_3_1') }}">
            <datalist id="question_text_3_1">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答3-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_1">{{ old('answer_text_3_1') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-2</span>
            <input name="question_text_3_2" list="question_text_3_2" value="{{ old('question_text_3_2') }}">
            <datalist id="question_text_3_2">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答3-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_2">{{ old('answer_text_3_2') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-3</span>
            <input name="question_text_3_3" list="question_text_3_3" value="{{ old('question_text_3_3') }}">
            <datalist id="question_text_3_3">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答3-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_3">{{ old('answer_text_3_3') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-4</span>
            <input name="question_text_3_4" list="question_text_3_4" value="{{ old('question_text_3_4') }}">
            <datalist id="question_text_3_4">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答3-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_4">{{ old('answer_text_3_4') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-1</span>
            <input name="question_text_4_1" list="question_text_4_1" value="{{ old('question_text_4_1') }}">
            <datalist id="question_text_4_1">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答4-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_1">{{ old('answer_text_4_1') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-2</span>
            <input name="question_text_4_2" list="question_text_4_2" value="{{ old('question_text_4_2') }}">
            <datalist id="question_text_4_2">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答4-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_2">{{ old('answer_text_4_2') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-3</span>
            <input name="question_text_4_3" list="question_text_4_3" value="{{ old('question_text_4_3') }}">
            <datalist id="question_text_4_3">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答4-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_3">{{ old('answer_text_4_3') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-4</span>
            <input name="question_text_4_4" list="question_text_4_4" value="{{ old('question_text_4_4') }}">
            <datalist id="question_text_4_4">
                @foreach ($question_texts as $question_text)
                <option value={{$question_text->question_text}}>
                @endforeach
            </datalist>
            <span class="input-group-text">回答4-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_4">{{ old('answer_text_4_4') }}</textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">画像</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="image_path" value="{{ old('image_path') }}">
        </div>
        <div class="input-group">
            <span class="input-group-text">肩書き</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="position" value="{{ old('position') }}">
        </div>
        <div class="input-group">
            <span class="input-group-text">説明文</span>
            <textarea class="form-control" aria-label="With textarea" name="explanation">{{ old('explanation') }}</textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-outline-secondary">追加</button>
        </div>
    </form>
</body>
</html>