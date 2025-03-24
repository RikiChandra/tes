<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Armada</title>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Rental Armada</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/customer') }}">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kendaraan') }}">Kendaraan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/transaksi') }}">Transaksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat datang di rental armada</h1>
            <p class="lead">Kami menyediakan rental terbaik untuk customer</p>
            <hr class="my-4">
            <p>Cari armada yang anda butuhkan disini !</p>
            
        </div>
        {{-- @php
        $no = 1;
        @endphp
        @foreach ($kendaraans as $data) --}}
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="car1.jpg" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Traktor</h5>
                        <p class="card-text">Traktor ini cocok digunakan untuk pembangunan</p>
                        <p class="card-text">Harga : Rp.500.000 per-hari</p>
                        <a href="#" class="btn btn-primary">Sewa Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- @endforeach --}}
        
    </div>

    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="text-center p-3">
            © 2023 Car Rental. All rights reserved.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>