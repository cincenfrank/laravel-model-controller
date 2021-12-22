<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Movies</title>
</head>
<body>
    <header></header>
    <main>

        <div class="container">
            <h1>DBFLIX</h1>
            <div class="row row-cols-4 g-5">
                @foreach ($moviesData as $movie)
                <div class="col ">
                    <div class="card h-100">
                        {{-- <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{$movie->original_title}}</h6>
                            <p class="card-text">Vote: {{$movie->vote}} / 10
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </main>
</body>
</html>
