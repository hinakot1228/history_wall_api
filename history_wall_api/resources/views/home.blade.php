<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>歴史の壁</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <p>ホーム</p>
    <div>
        <a class="btn btn-primary" href="{{url('/question/create')}}" role="button">質問追加</a>
        <a class="btn btn-primary" href="{{url('/questions')}}" role="button">質問一覧</a>
    </div>
</body>
</html>