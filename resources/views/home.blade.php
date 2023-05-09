<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Book Shop</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="row">
            @foreach ($books as $book)
                <div class="card col-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $book->author }}</h6>
                        <p class="card-text">{{ $book->description }}</p>
                        <div>{{ $book->genre }}</div>
                        <div>{{ $book->pages }}</div>
                        <div>{{ $book->price }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
