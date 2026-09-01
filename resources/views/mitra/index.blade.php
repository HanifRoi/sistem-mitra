<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Mitra</title>
    </head>
    <body>
        <h2>Daftar Mitra Instansi</h2>
        <a href="/mitra/create"><button>Tambah Mitra</button></a><br><br>
        <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama Mitra</th>
                <th>Kategori Usaha</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>

            @foreach ($data_mitra as $baris)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $baris->nama_mitra }}</td>
                <td>{{ $baris->kategori_usaha }}</td>
                <td>{{ $baris->alamat }}</td>
                <td>{{ $baris->no_telp }}</td>
                <td>
                    <a href="/mitra/{{ $baris->id }}/edit"><button>Edit</button></a>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>