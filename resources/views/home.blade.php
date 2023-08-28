<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="css/styles.css" rel="stylesheet" />

    <title>Pok&eacute;dex Iv</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid menuOption">
        <a class="navbar-brand" href="#">Pok&eacute;mon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </div>
        </div>
    </div>
    </nav>

    <header style="display: flex; align-items: center;  justify-content: center;" >
        <h1 class="mt-4">Pokedex</h1>
    </header>
    <div class="container text-center mt-5 " >
        <div class="row">       
            @foreach  ($pokemones['results'] as $i => $pokemon)
                <div class="col  mb-4">
                    <div class="card" style="width: 18rem;">                
                    <div class="card-body">
                        <h5 class="card-title">{{$pokemon['name']}}</h5>
                        <a href="{{ route('detalle', $i) }}" class="btn btn-primary">Ver m&aacute;s detalle </a>
                    </div>
                    </div>
                </div>   
            @endforeach               
        </div>
    </div>
    
</body>
</html>