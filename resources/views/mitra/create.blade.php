<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Mitra</title>
    </head>
    <body>
        <h2>Tambah Data Mitra</h2>
        <form action="/mitra" method="POST">
            @csrf
            @if ($errors->any())
                <div style="color: red;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div>
                <label>Nama Mitra</label><br>
                <input type="text" name="nama_mitra">
            </div>
            <br>
            <div>
                <label>Kategori Usaha</label><br>
                <input type="text" name="kategori_usaha">
            </div>
            <br>
            <div>
                <label>Alamat</label><br>
                <textarea name="alamat"></textarea>
            </div>
            <br>
            <div>
                <label>Nomor Telepon</label><br>
                <input type="text" name="no_telp">
            </div>
            <br>
            <button type="submit">Simpan Data</button>

        </form>
        <br>
        <a href="/mitra">Kembali ke Daftar</a>
    </body>
</html>