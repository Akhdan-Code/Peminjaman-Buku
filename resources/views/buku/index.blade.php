@extends('layouts.app')
@section('content')
<div style="margin: 20px">
    <h2>Daftar Peminjaman Buku</h2>
    <table style="border-collapse: collapse">
        <tr>
            <th>Nama Peminjam</th>
            <th>Nama Buku</th>
            <th>Jumlah Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Denda</th>
            <th><a href="{{ route('buku.create')}}">Tambah Data</a></th>
        </tr>
        @foreach ($buku as $buku)
            <tr>
                <td>{{ $buku->nama_peminjam}}</td>
                <td>{{ $buku->nama_buku}}</td>
                <td>{{ $buku->jumlah_buku}}</td>
                <td>{{ $buku->tanggal_pinjam}}</td>
                <td>{{ $buku->tanggal_kembali}}</td>
                <td>{{ $buku->denda}}</td>
                <td style="text-align: center">
                    <a href="{{ route('buku.edit',$buku->id)}}">Edit</a>
                    <form action="{{ route('buku.destroy',$buku->id)}}"
                        method="POST" style="display:inline"
                        onsubmit="return confirm('Tindakan ini tidak bisa dibatalkan');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                    style="background:none border:none">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection