<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Movies</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-danger" href="#">DBFLIX</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID" aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarID">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>

        <div class="container">
            <form class="row g-3 align-items-end mb-5">

                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label text-light">Order By</label>
                    <select class="form-select" id="filter" name="filter" required>
                        @if ($activeFilter)
                        <option disabled value="">Select a field to order results</option>
                        @else
                        <option selected disabled value="">Select a field to order results</option>
                        @endif
                        @if(count($filterList)>0)
                        @foreach ($filterList as $key)
                        @if($activeFilter===$key)
                        <option selected>{{$key}}</option>
                        @else
                        <option>{{$key}}</option>
                        @endif
                        @endforeach

                        @endif
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>

                <div class="col-6">
                    <button class="btn btn-outline-danger" type="submit">Order</button>
                </div>
            </form>

            <div class="row row-cols-4 g-5">
                @foreach ($moviesData as $movie)
                <div class="col ">
                    <a class="card h-100 bg-dark" href="#">
                        <div class="card-body">
                            <h5 class="card-title text-light">{{$movie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">({{$movie->original_title}})</h6>
                            <p class="card-text text-light">Vote: {{$movie->vote}} / 10
                        </div>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </main>
</body>
</html>
