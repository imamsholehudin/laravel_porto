@extends('master.masters')

@section('name','Data PT. Alim Rugi Salamina')

@section('title', 'Data Jabatan')


    
@section('content')
<form action="/jabatan/update/{{ $jabatan->id }}" method="post">
    <div class="card-body">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="exampleInputEmail1"
                placeholder="Job Posision" value="{{ $jabatan->jabatan }}" required>
                @if($errors->has('jabatan'))
                <div class="text-danger">
                    {{ $errors->first('jabatan')}}
                </div>
            @endif
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Gaji Pokok</label>
            <input type="number" class="form-control" name="gaji_pokok"
                id="exampleInputEmail1" placeholder="Sallary" value="{{ $jabatan->gaji_pokok }}" required>

                @if($errors->has('gaji_pokok'))
                <div class="text-danger">
                    {{ $errors->first('gaji_pokok')}}
                </div>
            @endif
        </div>
       


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