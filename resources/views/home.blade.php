
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel-controller</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg_nav">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img height="90" src="https://cdn.dribbble.com/users/2264632/screenshots/6708631/final.gif" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Movies</a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                @forelse($movies as $movie)
                <div class="col">
                    <div class="card">
                        <img src="https://www.salonlfc.com/wp-content/uploads/2018/01/image-not-found-scaled.png" alt="...">
                        <!-- <div class="card-body">
                            <h3>{{$movie['title']}}</h3>
                            <small>Original Title: {{$movie['original_title']}}</small>
                            <span>Vote: {{$movie['vote']}}</span>
                        </div> -->
                    </div>
                </div>

                @empty
                <p>Not movie yet! :P</p>
                @endforelse
            </div>
        </div>
    </main>
</body>

</html>