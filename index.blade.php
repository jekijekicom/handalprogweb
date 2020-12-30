@extends('tempelate')

@section('title', 'Halaman Pegawai')

@section('tabel')  
      @parent          
    <tr>
        <th>Nama</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($dataKaryawan as $p)
    <tr>
        <td>{{$p->karyawan_nama}}</td>
        <td>{{$p->karyawan_umur}}</td>
        <td>{{$p->karyawan_alamat}}</td>
        <td>
            <a class="btn btn-warning btn-sm" href="/editpegawai-{{ $p->karyawan_id}}">Edit</a>
            <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->karyawan_id}}">Hapus</a>
        </td>
    </tr>
    @endforeach
    <!--Pengaturan pagination -->
    Halaman: {{ $dataKaryawan->currentpage() }} <br>
    Jumlah Data: {{ $dataKaryawan->total() }}  <br>
    Data per Halama: {{ $dataKaryawan->perpage() }} <br>
    {{ $dataKaryawan->links() }}
@endsection

@section('konten')
    <h3 class="text-center">Data Karyawan</h3>
    <form action="pegawaicari" method="get" class="form-inline">
        <input class="form-control" type="text" name="cari" placeholder="Nama pegawai" value="{{ old('cari') }}">
        <input class="btn btn-primary ml-3" type="submit" value="Cari">
    </form>
    <br>
    <a class="btn btn-success" href="/pegawai-tambah"> + Tambah Karyawan</a>
    <br>
    <br>
@endsection

</body>
</html>