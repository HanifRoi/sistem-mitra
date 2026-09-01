<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Mitra</title>
    </head>
    <body>
        <h2>Tambah Data Mitra</h2>
        <form action="/mitra" method="POST">
            @csrf
            <div>
                <label>Nama Mitra</label><br>
                <input type="text" name="nama_mitra" required>
            </div>
            <br>
            <div>
                <label>Kategori Usaha</label><br>
                <input type="text" name="kategori_usaha" required>
            </div>
            <br>
            <div>
                <label>Alamat</label><br>
                <textarea name="alamat" required></textarea>
            </div>
            <br>
            <div>
                <label>Nomor Telepon</label><br>
                <input type="text" name="no_telp" required>
            </div>
            <br>
            <button type="submit">Simpan Data</button>

        </form>
        <br>
        <a href="/mitra">Kembali ke Daftar</a>
    </body>
</html>