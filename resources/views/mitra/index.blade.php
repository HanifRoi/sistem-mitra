@extends('layouts.app')
@section('content')


  
        <h2>Daftar Mitra Instansi</h2>
        <a href="/mitra/create"><button>Tambah Mitra</button></a><br><br>
        @if (session('sukses'))
            <div style="color: green;">
                {{ session('sukses') }}
            </div>
        @endif
        <form action="/mitra" method="GET" style="margin-bottom: 15px;">
            <input type="text" name="cari" placeholder="Cari...." value="{{ $cari }}" style="padding: 5px; width: 250px;">
            <button type="submit" style="padding: 5px 10px;">Cari</button>

            @if ($cari)
            <a href="/mitra"><button type="button" style="padding: 5px 10px;">Reset</button></a>
            @endif
        </form>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mitra</th>
                    <th>Kategori Usaha</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_mitra as $index => $baris)
                <tr>
                    <td>{{$data_mitra->firstItem() + $index}}</td>
                    <td>{{ $baris->nama_mitra }}</td>
                    <td>{{ $baris->kategori_usaha }}</td>
                    <td>{{ $baris->alamat }}</td>
                    <td>{{ $baris->no_telp }}</td>
                    <td>
                        <a href="/mitra/{{ $baris->id }}/edit"><button>Edit</button></a>
                        <form action="/mitra/{{ $baris->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Tidak ada data mitra.</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 15px">
            {{ $data_mitra->links() }}
        </div>

@endsection