<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ficbook</title>
</head>
<body>
    <article class="registration">
        <form action="{{route('create_user')}}" method="POST">
            @csrf
            <div class="form-example">
              <label for="name">Enter name: </label>
              <input type="text" name="name" id="name" required />
            </div>
            <div class="form-example">
              <label for="email">Enter email: </label>
              <input type="email" name="email" id="email" required />
            </div>
            <div class="form-example">
                <label for="email">Enter email: </label>
                <input type="email" name="email" id="email" required />
              </div>
            <div class="form-example">
              <label for="password">Enter password: </label>
              <input type="password" name="password" id="password" required />
            </div>
            <div class="form-example">
              <input type="submit" value="Register" />
            </div>
          </form>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </article>
    <article class="cards">
        @foreach($stories as $story)
            <div class="card">
                <p>{{$story->title}}</p>
                <p>{{$story->text}}</p>
                <p>{{$story->created_at}}</p>
            </div>
        @endforeach
    </article>
</body>
</html>
