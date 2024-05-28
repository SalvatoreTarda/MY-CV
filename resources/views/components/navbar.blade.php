<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid d-flex my-5 mx-5">
        <div class="row">
            <div class="col-12 col-md-3 mx-5">
                <nav id="navbar" class="navbar navbar-expand-lg bg-bl fixed-top">
                    <a class="navbar-brand text-w nav-link mx-5" href="{{ route('welcome') }}">Salvatore Tarda</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-w"></span> <!-- Aggiunta della classe 'white' -->
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link" aria-current="page" href="{{ route('welcome') }}">Home</a>
                            <a class="nav-link" href="{{ route('Bio') }}">Bio</a>
                            <a class="nav-link" href="{{ route('WebDeveloper') }}">Web Developer</a>
                            <a class="nav-link" href="{{ route('GraficDesign') }}">Grafica</a>
                        </div>
                    </div>
                </nav>
                
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
