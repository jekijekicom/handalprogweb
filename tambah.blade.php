@extends('tempelate')

@section('title', 'Tambah Data')

@section('tabel')
    @parent
    <h3 class="text-center">Data Karyawan</h3>
    <br>
    <br>
    <h4>Input Data Tambahan</h4>
    <form method="POST" action="/pegawai/store">
        {{ csrf_field() }} 
        <!-- <input type = "hidden" name = "_token"> -->
        <div class="form-row">
            <div class="col-sm-8">
                <label for="nl">Nama: </label>
                <input class='form-control' type="text" name="nama" id="nl" required='require' placeholder="Nama Lengkap">
            </div>
            <div class="col">
                <label for="usia">Umur:</label>
                <input class='form-control' type="number" name="umur" id="usia" required='require'>
            </div>
        </div>
        <br>
        <div class="form-row">
            <label for="adres">Alamat: </label>
            <textarea name="alamat" id="adres" rows="3" class='form-control'></textarea>
        </div>
        <br>
        <button class="btn btn-info" type="submit" style="margin-right: 5px; border-radius: 6px;">Tambahkan</button>
        <a href="/pegawai" class="btn btn-secondary">Kembali</a>
    </form>
@endsection