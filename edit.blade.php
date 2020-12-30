@extends('tempelate')

@section('title', 'Edit Karyawan')

@section('tabel')
    @parent
    @foreach ($karyawan as $p)
        <form action="/pegawai/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$p->karyawan_id}}">
            <div class="form-row">
                <div class="col-sm-8">
                    <label for="nl">Nama: </label>
                    <input class='form-control' type="text" id="nl" name="nama" required='require' value="{{$p->karyawan_nama}}">
                </div>
                <div class="col">
                    <label for="usia">Umur: </label>
                    <input type="number" style="margin-bottom: 5px;" id='usia' name="umur" required='require' class="form-control" value="{{$p->karyawan_umur}}">
                </div>
            </div>
            <div class="form-row" style="margin-left: 1px;">
                <label>Alamat: </label>
                <textarea name="alamat" rows="3" class="form-control" required='require'>{{$p->karyawan_alamat}}</textarea>
            </div>
            <br>
            <button class="btn btn-warning" type="submit" style="margin-right: 5px; border-radius: 6px;">Update</button>
            <a href="/pegawai" class="btn btn-secondary">Kembali</a>
        </form>
    @endforeach
@endsection
