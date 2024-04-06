<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Daftar Akun</title>
</head>
<style>
    /* Tombol "Simpan" */
    .btn-save {
        background-color: #941B0C;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        display: block;
        margin: 10px auto 0;
        /* Menambahkan margin atas 20px */
        width: 150px;
    }

    .links {
        margin-top: 20px;
    }

    /* Membuat tombol "Simpan" responsif */
    @media screen and (max-width: 600px) {
        .btn-save {
            font-size: 14px;
            padding: 8px 16px;
        }
    }
</style>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Daftar Akun</header>
            <form action="{{ route('auth.store') }}" method="post">
                @csrf
                <div class="field input">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" placeholder="Username" required>
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field input">
                    <label for="no_telp">Nomor Telephone</label>
                    <input type="text" name="no_telp" id="no_telp" placeholder="No Telp" required>
                </div>
                @error('no_telp')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field input">
                    <label for="password">Kata Sandi</label>
                    <input type="password" name="password" id="password" placeholder="Kata Sandi" required>
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field">

                    <input type="submit" class="btn-save" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Apakah punya akun ? <a href="{{ route('auth.login') }}">Masuk</a>
                </div>
            </form>
</body>
