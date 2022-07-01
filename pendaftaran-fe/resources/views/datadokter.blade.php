@extends('layout.main')
@section('content')

    <div class="card shadow mb-4">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>ID Dokter</th>
                        <th>Nama</th>
                        <th>Kategori</th>

                    </tr>
                    </thead>
                    @foreach($pass as $tt)
                    <tbody>
                    <tr class="text-center align-content-center">
                        <td align="center">{{$loop->iteration}}</td>
                        <td>{{$tt['id']}}</td>
                        <td>{{$tt['nama']}}</td>
                        <td>{{$tt['kategori']}}</td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
