<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mitra</title>
</head>
<body>
    <form action="/mitra/{{ $mitra->id }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Nama Mitra</label><br>
        <input type="text" name="nama_mitra" value="{{ $mitra->nama_mitra }}" required>
    </div>
    <br>
    <div>
        <label>Kategori Usaha</label><br>
        <input type="text" name="kategori_usaha" value="{{ $mitra->kategori_usaha }}" required>
    </div>
    <br>
    <div>
        <label>Alamat</label><br>
        <textarea name="alamat" required>{{ $mitra->alamat }}</textarea>
    </div>
    <br>
    <div>
        <label>Nomer Telepon</label><br>
        <input type="text" name="no_telp" value="{{ $mitra->no_telp }}" required>
    </div>
    <br>
    <button type="submit">Update</button>
</body>
</html>