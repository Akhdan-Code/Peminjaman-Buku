@extends('layouts.app')
@section('content')
<div style="margin:20px;">
    <h2>Buat Data Buku Baru</h2>
    <form action="{{ route('buku.store')}}" method="POST">
    @csrf
    <table>
        <tr>
            <td>
                <label for="nama_peminjam">Nama Peminjam</label>
            </td>
            <td>
                <input type="text" name="nama_peminjam" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama_buku">Nama Buku</label>
            </td>
            <td>
                <input type="text" name="nama_buku" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="jumlah_buku">Jumlah Buku</label>
            </td>
            <td>
                <input type="number" name="jumlah_buku" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
            </td>
            <td>
                <input type="date" name="tanggal_pinjam" required>
            </td>
        </tr>    
        <tr>
            <td>
                <label for="tanggal_kembali">Tanggal Kembali</label>
            </td>
            <td>
                <input type="date" name="tanggal_kembali">
            </td>
        </tr>
        <tr>
            <td>
                <label for="denda">Denda</label>
            </td>
            <td>
                <input type="number" name="denda">
            </td>
        </tr>        
        <tr>
            <td colspan="2" style="text-align:right;">
                <button type="submit">Tambah Data</button>
            </td>
        </tr>
    </table>
    </form>
</div>
@endsection
