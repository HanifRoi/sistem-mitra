<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Mitra</title>
    </head>
    <body>
        <h2>Daftar Mitra Instansi</h2>
        <table border="1" cellpadding="10">
            <tr>
                <th>No</th>
                <th>Nama Mitra</th>
                <th>Kategori Usaha</th>
                <th>Alamat</th>
            </tr>

            @foreach ($data_mitra as $baris)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $baris->nama_mitra }}</td>
                <td>{{ $baris->kategori_usaha }}</td>
                <td>{{ $baris->alamat }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>