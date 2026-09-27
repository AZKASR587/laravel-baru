<!DOCTYPE html>
<html>
<head>
    <title>Profile Mahasiswa</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        .navbar {
            background: #2874f0;
            color: white;
            padding: 15px 10%;
            display: flex;
            justify-content: space-between;
        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 40px;
        }

        .card {
            width: 350px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
            text-align: center;
        }

        .foto {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 25px;
        }

        .judul {
            font-size: 18px;
            margin: 15px 0;
        }

        .data {
            border-top: 1px solid #ddd;
            padding: 20px;
            text-align: left;
        }

        .data p {
            margin: 12px 0;
        }

        .data b {
            display: inline-block;
            width: 80px;
        }

        footer {
            text-align: center;
            margin-top: 80px;
            color: #777;
        }
    </style>
</head>

<body>
<div class="navbar">
    <b>UNPAM - Prodi SI</b>

    <div>
        <a href="/">Home</a>
        <a href="/profile">Profile</a>
        <a href="/about">About</a>
    </div>
</div>
        

    <div class="container">

        <div class="card">

            <img src="{{ asset('images/foto.jpg') }}" class="foto">

            <div class="judul">
                Profile Mahasiswa
            </div>

            <div class="data">
                <p><b>Nama:</b> AZKA SYAHMI RAMADHAN</p>
                <p><b>NIM:</b> 231011700012</p>
                <p><b>Jurusan:</b> Sistem Informasi</p>
                <p><b>Email:</b> AZKASR836@GMAIL.COM</p>
                <p><b>Kampus:</b> UNPAM</p>
            </div>

        </div>

    </div>

    <footer>
        © 2026 Universitas Pamulang
    </footer>

</body>
</html>