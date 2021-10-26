@extends('master.masters')

@section('name','Data PT. Alim Rugi Salamina')

@section('title', 'Data Karyawan')


    
@section('content')
<a href="/karyawan/tambah/" class="btn btn-primary">Tambah Data</a>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jabatan</th>
      <th>Tanggal Lahir</th>
      <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      <?php $no=1;?>
      @foreach ($karyawan as $k)
          <?php //var_dump($k)?>
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $k->nama }}</td>
        <td>{{ $k->id_jabatan }}</td>
        <td>{{ $k->tgl_lahir }}</td>
        <td>
          <a href="karyawan/{{ $k->id }}" class="btn btn-primary">Detail</a>
          <a href="karyawan/edit/{{ $k->id }}" class="btn btn-warning">Ubah</a>
          <a href="karyawan/hapus/{{$k->id}}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
          </tr>
    </tfoot>
  </table>
@endsection

@section('footer','Data Karyawan 2021')