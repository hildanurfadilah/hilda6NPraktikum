<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/mahasiswa">Kembali</a>
    <h1>Form Edit Data Mahasiswa</h1>

    <form action="/mahasiswa/update/{{$mhs->id}}" method="post">
        @csrf
    NPM <input type="text" name="npm" required value="{{$mhs->npm}}"> <br/>
    NAMA <input type="text" name="nama" required value="{{$mhs->nama}}"> <br/>
    JURUSAN <input type="text" name="jurusan" required value="{{$mhs->jurusan}}"> <br/>

    <button type="submit">UPDATE</button>
</form>
</body>
</html>