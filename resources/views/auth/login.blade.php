<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Masuk</title>
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
            margin: 5px auto 10px;
            /* Penyesuaian margin-bottom */
            width: 140px;
            height: 42px;
        }

        .links {
            margin-top: 15px;
            /* Pusatkan teks */
        }

        /* Membuat tombol "Simpan" responsif */
        @media screen and (max-width: 600px) {
            .btn-save {
                padding: 10px;
                /* Menyesuaikan padding */
                font-size: 16px;
                /* Menyesuaikan ukuran font */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box form-box">
            <header>Masuk</header>
            <form action="{{ route('auth.authentication') }}" method="post">
                @csrf
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ @old('email') }}">
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="field input">
                    <label for="password">Kata Sandi</label>
                    <input type="password" class="form-control" placeholder="Kata Sandi" name="password">
                </div>
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="links">
                    <input type="submit" class="btn-save" name="submit" value="Login" required>
                    Belum punya akun ? <a href="{{ route('auth.register') }}">Daftar</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
