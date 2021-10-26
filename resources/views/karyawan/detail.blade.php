@extends('master.masters')

@section('name','Data PT. Alim Rugi Salamina')

@section('title', 'Data Karyawan')


    
@section('content')
<table id="example2" class="table table-bordered table-hover">
    
      @foreach ($karyawan as $k)
          <?php //var_dump($k)?>
        <tr>
            <td>ID</td>
            <td>{{ $k->id }}</td>
        </tr>
        <tr> 
            <td>Nama Lengkap</td>
            <td>{{ $k->nama }}</td>
        </tr>
        <tr> 
            <td>Nama Jabatan</td>
            <td>{{ $k->id_jabatan }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>{{ $k->tgl_lahir }}</td>
        
        </tr>
        <tr>
            <td>Alamat</td>
            <td>{{ $k->alamat}}</td>
        
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $k->email }}</td>
        
        </tr>
        <tr>
            <td>Password</td>
            <td>{{ $k->password }}</td>
        
        </tr>
      @endforeach
    
  </table>
@endsection

@section('footer','Data Karyawan 2021')