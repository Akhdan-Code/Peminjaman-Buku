@extends('layouts.app')
@section('content')
<div style="margin:20px;">
    <h2>Edit</h2>
    <form action="{{ route('buku.update', $buku->id)}}" method="POST">
        @csrf
        @method('PUT')
    <table>
        <tr>
            <td>
                <label for="nama_peminjam">Nama Peminjam</label>
            </td>
            <td>
                <input type="text" name="nama_peminjam" value="{{ $buku->nama_peminjam }}"required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama_buku">Nama Buku</label>
            </td>
            <td>
                <input type="text" name="nama_buku" value="{{ $buku->nama_buku }}" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="jumlah_buku">Jumlah Buku</label>
            </td>
            <td>
                <input type="number" name="jumlah_buku" value="{{ $buku->jumlah_buku }}"required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
            </td>
            <td>
                <input type="date" name="tanggal_pinjam"value="{{ $buku->tanggal_pinjam }}" required>
            </td>
        </tr>    
        <tr>
            <td>
                <label for="tanggal_kembali">Tanggal Kembali</label>
            </td>
            <td>
                <input type="date" name="tanggal_kembali" value="{{ $buku->tanggal_kembali }}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="denda">Denda</label>
            </td>
            <td>
                <input type="number" name="denda" value="{{ $buku->denda }}">
            </td>
        </tr>        
        <tr>
            <td colspan="2" style="text-align:right;">
                <button type="submit">Update Data</button>
            </td>
        </tr>
    </table>
    </form>
</div>
@endsection

