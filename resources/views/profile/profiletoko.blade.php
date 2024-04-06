<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Toko</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-..." crossorigin="anonymous">
    <link rel="stylesheet" href="style/profiletoko.css">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
    }

    .navbar {
        width: 100%;
        height: 120px;
        background-color: #941b0c;
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

    .profile-info {
        display: flex;
        align-items: center;
    }

    .profile-image {
        width: 40px;
        /* Sesuaikan ukuran gambar profil */
        height: 40px;
        /* Sesuaikan ukuran gambar profil */
        border-radius: 50%;
        /* Membuat gambar profil menjadi lingkaran */
        margin-right: 10px;
        /* Memberikan jarak dari nama toko */
        cursor: pointer;
        /* Menjadikan gambar profil dapat diklik */
    }

    /* Tambahan CSS */
    .button-container {
        display: flex;
        flex-direction: column;
    }

    /* Mengatur tata letak tombol-tombol */
    .edit-button {
        background-color: #bf4342;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
        cursor: pointer;
        width: 150px;
        height: 40px;
        text-align: center;
        margin-bottom: 15px;
        /* Menggeser tombol Edit ke atas */
    }

    .add-product-button {
        background-color: #bf4342;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
        cursor: pointer;
        width: 150px;
        height: 40px;
        text-align: center;
        margin-top: 5px;
    }

    .store-name {
        font-weight: bold;
        /* Membuat teks nama toko menjadi tebal */
    }
</style>

<body>
    <nav class="navbar">
        <button class="navbar-button"><i class="fas fa-chevron-circle-left"></i></button>
        <div class="profile-info">
            <a href="{{ route('profile.show', $value->id) }}"> <!-- Mengarahkan gambar profil ke halaman daftar toko -->
                <img src="url_gambar_anda.jpg" alt="Profile Image" class="profile-image">
            </a>
            <span class="store-name">Nama Toko</span>
        </div>
        <div class="button-container">
            <a href="" class="edit-button">Edit</a>
            <a href="" class="add-product-button">Tambah Produk</a>
        </div>
    </nav>

</body>

</html>
