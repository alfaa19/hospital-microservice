@extends('layout.main')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Kategori</th>
                        <th>Hari</th>
                        <th>Jam</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pass as $tt)

                    <tr>
                        <td align="center">{{$loop->iteration}}</td>
                        <td>{{$tt['dokter']['nama']}}</td>
                        <td>{{$tt['dokter']['kategori']}}</td>
                        <td>{{$tt['hari']}}</td>
                        <td>{{$tt['jam']}}</td>

                    </tr>


                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
