<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/mahasiswa">Kembali</a>
    <h1>Form Tambah Data Mahasiswa</h1>

    <form action="/mahasiswa/store" method="post">
        @csrf
    NPM <input type="text" name="npm" required> <br/>
    NAMA <input type="text" name="nama" required> <br/>
    JURUSAN <input type="text" name="jurusan" required> <br/>

    <button type="submit">SIMPAN</button>
    </form>
</body>
</html>