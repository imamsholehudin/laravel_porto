@extends('master.masters')

@section('name','Data PT. Alim Rugi Salamina')

@section('title', 'Data Jabatan')


    
@section('content')
<a href="jabatan/tambah" class="btn btn-primary">Tambah Data</a><br><br>
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>No</th>
      <th>Jabatan</th>
      <th>Gaji Pokok</th>
 
      <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
      <?php $no=1;?>
      @foreach ($jabatan as $k)
          <?php //var_dump($k)?>
      <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $k->jabatan }}</td>
        <td>{{ $k->gaji_pokok }}</td>
        
        <td>
         
          <a href="/jabatan/edit/{{ $k->id }}" class="btn btn-warning">Ubah</a>
          <a href="/jabatan/hapus/{{ $k->id }}" class="btn btn-danger">Hapus</a>
        </td>
      </tr>
      @endforeach
    
    </tbody>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Jabatan</th>
            <th>Gaji Pokok</th>
 
            <th>Aksi</th>
          </tr>
    </tfoot>
  </table>
@endsection

@section('footer','Data Karyawan 2021')