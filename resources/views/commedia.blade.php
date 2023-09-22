<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Esercizio 53: Laravel - primi passi</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="{{ asset('img/icon-logo.png') }}">

    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <header class="bg-primary">
        {{-- Menù con i generi --}}
        <nav class="container pt-3 pb-3 text-secondary text-center">
            <div class="row row-cols-2 row-cols-sm-4 gy-3 justify-content-center">
                @foreach ($movieGenres as $singleGenre)
                    <div class="col">
                        <a href="{{ $singleGenre['genre'] }}">
                            {{ $singleGenre['genre'] }}
                        </a>
                    </div>
                @endforeach
            </div>
        </nav>
    </header>

    <main class="container pt-5 pb-5">
        <h1 class="text-center text-primary m-0 pb-5 fw-bold">Commedia</h1>
        <div class="row row-cols-1 row-cols-sm-3 gy-3 justify-content-center">
            @foreach ($commedia as $movie)
                <div class="col">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">{{ $movie['title'] }}</h5>
                            <ul class="list-unstyled card-text">
                                <li class='card-text'>
                                    <span>Regista</span>:
                                    {{ $movie['director'] }}
                                </li>
                                <li class='card-text'>
                                    <span>Trama</span>:
                                    {{ $movie['description'] }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center p-5">
            <a href="/" class="btn btn-primary fw-bold" tabindex="-1" role="button">Torna alla Home</a>
        </div>
    </main>

    <footer class="bg-primary">
        <p class="m-0 pt-2 pb-2 text-center text-secondary">
            <i class="fa-solid fa-chevron-right"></i>
            Generi cinematografici
            <i class="fa-solid fa-chevron-left"></i>
        </p>
    </footer>
</body>

</html>
