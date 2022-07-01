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
            <a class="btn btn-success mb-3" href="/dashboard/pasien/create">Daftar baru</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Aksi</th>

                    </tr>
                    </thead>
                    @foreach($pass as $dt)
                    <tbody>
                    <tr class="text-center align-content-center">
                        <td>{{$loop->iteration}}</td>
                        <td>{{$dt['nama']}}</td>
                        <td>{{$dt['Alamat']}}</td>
                        <td>{{$dt['kontak']}}</td>
                        <td>{{$dt['jenis_kelamin']}}</td>
                        <td>{{$dt['usia']}}</td>
                        <td>
                            <div class="form-row justify-content-center">
                                <form class="m-1 " action="/dashboard/pasien/{{$dt['id']}}/edit" method="GET" >

                                    @csrf
                                    <input type="submit" class="btn btn-warning " value="Update">
                                </form>
                                <form class="m-1" action="/dashboard/pasien/{{$dt['id']}}" method="post" >

                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger " value="Delete">

                                </form>


                            </div>

                            </form>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection()
