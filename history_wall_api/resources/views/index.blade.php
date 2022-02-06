<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>質問一覧</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <p>index</p>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">名前</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($questions as $question)
      <tr>
          <td scope="row">{{ $question->id }}</td>
          <td>
              <a href="{{ route('questions.show', $question->id) }}">
                  {{ $question->name }}
              </a>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>