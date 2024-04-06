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
        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #941B0C;
            padding: 10px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-button {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .bold-text {
            font-weight: bold;
        }

        .custom-box {
            background-color: #D9D9D9;
            padding: 50px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 4px;
        }

        .card {
            max-width: 90%;
            margin: auto;
            background-color: #fff;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .text-right {
            text-align: right;
        }

        .btn-simpan {
            border-color: #941B0C;
            font-weight: bold;
            border-width: 2px;
            border-radius: 20px;
        }

        /* Media Query for Responsive Navbar */
        @media (max-width: 768px) {
            .bold-text {
                margin-right: 0;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <button class="navbar-button"><i class="fas fa-chevron-circle-left"></i></button>
        <span class="bold-text">Tambah <strong>Produk</strong></span>
    </nav>

    <div class="custom-box text-center">
        <button class="navbar-button"><i class="fas fa-plus"></i></button>
        <p style="margin-top: 10px; color: rgba(0, 0, 0, 0.34);">Tambah Gambar Makanan</p>
    </div>


    <div class="card">
        <form>
            <div class="form-group">
                <label for="foodName">Nama Makanan :</label>
                <input type="text" id="foodName" name="foodName" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="foodPrice">Harga Makanan :</label>
                <input type="number" id="foodPrice" name="foodPrice" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="stock">Stok Barang :</label>
                <input type="number" id="stock" name="stock" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="category">Kategori :</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                        <label class="form-check-label" for="inlineCheckbox1">Pedes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                        <label class="form-check-label" for="inlineCheckbox2">2</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <textarea id="description" name="description" rows="4" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="foodLocation">Lokasi Makanan :</label>
                <input type="text" id="foodLocation" name="foodLocation" class="form-control" required>
            </div>
            <div class="form-group text-right">
                <button type="button" class="btn btn-simpan">Simpan</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS and Popper.js scripts (required for Bootstrap components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qBjFLjF+KX6a3Ep9MlaiCWZLPJLt407ISl1tIukTsJwbSUpClL4M8DnF75gANTtN" crossorigin="anonymous">
    </script>

</body>

</html>
