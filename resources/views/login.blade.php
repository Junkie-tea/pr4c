<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <article class="cards">
        @foreach($stories as $story)
            <div class="card">
                <p>{{$story->title}}</p>
                <p>{{$story->text}}</p>
                <p>{{$story->created_at}}</p>
            </div>
        @endforeach
    </article>
    <article class="creation">
        <form action="{{route('create')}}" method="POST">
            @csrf
            <div class="form-example">
              <label for="title">Enter title: </label>
              <input type="text" name="title" id="title" required />
            </div>
            <div class="form-example">
              <label for="text">Enter text: </label>
              <input type="text" name="text" id="text" required />
            </div>
            <div class="form-example">
              <input type="submit" value="Создать" />
            </div>
          </form>
    </article>
</body>
</html>
