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
    <form class="row g-3" action="{{ route('questions.store') }}" method="POST">
        @csrf
        <!-- <div class="input-group">
            <span class="input-group-text">セレ1-1</span>
            <select class="form-select" id="inputGroupSelect01">
                <option selected>Choose...</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <span class="input-group-text">回答1-1</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div> -->
        <div class="input-group">
            <span class="input-group-text">名前</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_1"></textarea>
            <span class="input-group-text">回答1-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_1"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_2"></textarea>
            <span class="input-group-text">回答1-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_2"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_3"></textarea>
            <span class="input-group-text">回答1-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_3"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問1-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_1_4"></textarea>
            <span class="input-group-text">回答1-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_1_4"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_1"></textarea>
            <span class="input-group-text">回答2-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_1"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_2"></textarea>
            <span class="input-group-text">回答2-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_2"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_3"></textarea>
            <span class="input-group-text">回答2-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_3"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問2-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_2_4"></textarea>
            <span class="input-group-text">回答2-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_2_4"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_1"></textarea>
            <span class="input-group-text">回答3-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_1"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_2"></textarea>
            <span class="input-group-text">回答3-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_2"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_3"></textarea>
            <span class="input-group-text">回答3-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_3"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問3-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_3_4"></textarea>
            <span class="input-group-text">回答3-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_3_4"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-1</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_1"></textarea>
            <span class="input-group-text">回答4-1</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_1"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-2</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_2"></textarea>
            <span class="input-group-text">回答4-2</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_2"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-3</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_3"></textarea>
            <span class="input-group-text">回答4-3</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_3"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">質問4-4</span>
            <textarea class="form-control" aria-label="With textarea" name="question_text_4_4"></textarea>
            <span class="input-group-text">回答4-4</span>
            <textarea class="form-control" aria-label="With textarea" name="answer_text_4_4"></textarea>
        </div>
        <div class="input-group">
            <span class="input-group-text">画像</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="image_path">
        </div>
        <div class="input-group">
            <span class="input-group-text">肩書き</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="position">
        </div>
        <div class="input-group">
            <span class="input-group-text">説明文</span>
            <textarea class="form-control" aria-label="With textarea" name="explanation"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">追加</button>
        </div>
    </form>
</body>
</html>