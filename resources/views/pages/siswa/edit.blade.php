@extends('layout/main')
@section('title', 'Home')


@section('container')
    <div class="jumbotron-fluid mt-4">
        <h1>Edit</h1>
        <div class="dropdown-divider"></div>
        <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Depan</label>
                <input type="text" value={{$siswa->nama_depan}} name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Belakang</label>
                <input type="text" value={{$siswa->nama_belakang}} name="nama_belakang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Agama</label>
                <input type="text" value={{$siswa->agama}} name="agama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"> {{$siswa->alamat}}</textarea>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/" class="btn btn-light">Back To Home</a>

            </div>

        </form>
    </div>

@endsection
