@extends('layout/main')
@section('title', 'Home')


@section('container')
    <div class="mt-2">
        @component('pages.index.item.indexItem',[
            'data_siswa'=> $data_siswa,
            'laki'=> $laki,
            'perempuan'=> $perempuan
            ])@endcomponent
            @if(session('success'))
                <div class="alert alert-success" id="alert">
                    <?= session('success')?>
                </div>
            @endif
            @if(session('delete'))
                <div class="alert alert-danger" id="alert">
                    <?= session('delete')?>
                </div>
            @endif
        <div class="header-text">
            <h1>Data Siswa</h1>
            <div class="dropdown-divider"/>
        </div>
        <div class="table mt-4">
            @component('pages.index.item.tambahSiswa')@endcomponent
            <table class="table table-dark mt-2">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Depan</th>
                    <th>Nama Belakang</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1?>
                @foreach($data_siswa as $siswa)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$siswa->nama_depan}}</td>
                        <td>{{$siswa->nama_belakang}}</td>
                        <td>{{$siswa->jenis_kelamin}}</td>
                        <td>{{$siswa->agama}}</td>
                        <td>{{$siswa->alamat}}</td>
                        <td>
                            <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning">Edit</a>
                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger" onclick="return confirm(`are you sure deleted {{$siswa->nama_depan}} ?`)">Delete</a>
                        </td>
                    </tr>
                    <?php $i++?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection

<script>
    document.getElementById("alert").ready(function(){
        setTimeout(function(){
            document.getElementById("alert").remove();
        }, 5000 ); // 5 secs
    });

</script>
