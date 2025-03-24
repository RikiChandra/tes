<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Transaction</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Transaksi</h1>
        <form action="{{ route('transaksi.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="customer_name">Nama Customer</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="car_model">Model Armada</label>
                <input type="text" class="form-control" id="kendaraan" name="kendaraan" required>
            </div>
            <div class="form-group">
                <label for="rental_date">Tanggal Rental</label>
                <input type="date" class="form-control" id="rental_date" name="tanggal_rental" required>
            </div>
            <div class="form-group">
                <label for="return_date">Tanggal Pulang</label>
                <input type="date" class="form-control" id="return_date" name="tanggal_pulang" required>
            </div>
            <div class="form-group">
                <label for="total_amount">Total Harga</label>
                <input type="number" class="form-control" id="total_amount" name="total_amount" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>