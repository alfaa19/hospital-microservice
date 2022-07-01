@extends('layout.main')
@section('content')
    <!-- DataTales Example -->
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the .</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <a class="btn btn-success mb-3" href="/dashboard/pendaftaran/form">Daftar baru</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Layanan</th>
                        <th>Tanggal Daftar</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pass as $data)
                    <tr class="text-center">

                        <td>{{$loop->iteration}}</td>
                        <td>{{$data['pasien']['nama']}}</td>
                        <td>{{$data['pasien']['Alamat']}}</td>
                        <td>{{$data['pasien']['kontak']}}</td>
                        <td>{{$data['pasien']['jenis_kelamin']}}</td>
                        <td>{{$data['pasien']['usia']}}</td>
                        <td>{{$data['layanan']}}</td>
                        <td>{{$data['created_at']}}</td>
                        <td>
                            <div class="btn btn-warning">Delete</div>
                            <div class="btn btn-danger">Delete</div>
                            <div class="btn btn-primary">Daftar</div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection()
