<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-..." crossorigin="anonymous">
    <style>
        .custom-navbar {
            background-color: #941b0c !important;
        }

        .custom-box {
            padding: 25px;
            margin-top: 0px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="collapse" id="navbarToggleExternalContent">
    </div>
    <nav class="navbar navbar-dark custom-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-target="#navbarToggleExternalContent"
                aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <!-- Icon Notifikasi (Dapat Diklik) -->
            <a href="/notifications" class="text-white" style="text-decoration: none; margin-left: 1180px;">
                <i class="fas fa-bell" style="font-size: 30px;"></i>
            </a>
            <!-- Icon Akun (Dapat Diklik) -->
            <a href="/profile" class="text-white" style="text-decoration: none;">
                <i class="fas fa-user-circle" style="font-size: 30px;"></i>
            </a>
        </div>
    </nav>    

    <!-- Kotak di bawah Navbar -->
    <div class="custom-box" style="background-color: #FFDAB9; padding: 50px; margin: 0px; text-align: center;" >
        <!-- Isi kotak sesuai kebutuhan Anda -->
        <h2>Ingin memperbarui stok makanan?</h2>
        <!-- Tambahan tombol -->
        {{-- <a href="{{ route('homepen.addproduk') }}" class="btn btn-success">
            Perbarui
          </a> --}}
        {{-- <button style="padding: 2px 30px; background-color: #BF4342; color: #fff; border: none; border-radius: 5px; cursor: pointer;" onclick="perbarui()">Perbarui</button> --}}
    </div>

    <div class="container mt-3" style="text-align: left; font-weight: bold; font-size: 1.2em; margin-left: 10px;">
        <p>Makanan yang kamu jual</p>
    </div>

    <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 20px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <style>
                    .card-title {
                        color: black;
                        text-decoration: none;
                    }

                    .card-title:hover {
                        color: blue;
                    }
                </style>

                <div class="card-body">
                    <!-- Tukar elemen anchor dan h5 -->
                    <h5 class="card-title"><a href="url_halaman_produk"
                            style="text-decoration: none; color: inherit;">Risol Mayo</a></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 20px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Risol Mayo</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 bg-light" style="max-width: 540px; margin-left: 20px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Risol Mayo</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-3 " style="max-width: 540px; margin-left: 20px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Risol Mayo</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</html>
