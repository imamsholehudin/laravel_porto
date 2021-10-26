@extends('master.masters')

@section('name','Data PT. Alim Rugi Salamina')

@section('title', 'Ubah Data Karyawan')


    
@section('content')
<form action="/karyawan/update/{{ $karyawan->id }}" method="post">
    <div class="card-body">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1"
                placeholder="Name Employee" value="{{ $karyawan->nama }}" required>
                @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir"
                id="exampleInputEmail1" value="{{ $karyawan->tgl_lahir }}" placeholder="Birth" required>

                @if($errors->has('tgl_lahir'))
                <div class="text-danger">
                    {{ $errors->first('tgl_lahir')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{ $karyawan->alamat }}" id="exampleInputEmail1"
                placeholder="Address" required>
                @if($errors->has('alamat'))
                <div class="text-danger">
                    {{ $errors->first('alamat')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $karyawan->email }}" id="exampleInputEmail1"
                placeholder="Email" required>
                @if($errors->has('email'))
                <div class="text-danger">
                    {{ $errors->first('email')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Password</label>
            <input type="text" class="form-control" name="password" value="{{ $karyawan->password }}" id="exampleInputEmail1"
                placeholder="Password" required>
                @if($errors->has('password'))
                <div class="text-danger">
                    {{ $errors->first('password')}}
                </div>
            @endif
        </div>
        <?php
        //var_dump($jabatan);
        ?>
        <select class="form-select" multiple aria-label="multiple select example" name="jabatan">
            
            @foreach($jabatan as $j)
            <option value="{{ $j->id }}" @if($karyawan->id_jabatan == $j->id)
                selected
                @endif
                >{{$j->jabatan}}</option>
            @endforeach

          </select>
          @if($errors->has('jabatan'))
                <div class="text-danger">
                    {{ $errors->first('jabatan')}}
                </div>
            @endif
       


    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan">
        <input type="reset" class="btn btn-warning" name="Simpan" value="Reset">
        <a href="/jabatan" type="submit" class="btn btn-danger">Kembali </a>
    </div>
</form>
@endsection

@section('footer','Data Karyawan 2021')