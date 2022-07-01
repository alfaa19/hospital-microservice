@extends('main')
@section('tabeldatadokter')

    <div class="card shadow mb-4">
        <div class="card-body">
            <a class="btn btn-success mb-3" href="/datadokter/create">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>ID Dokter</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Opsi</th>
                    </tr>
                    </thead>
                    @foreach($pass as $tt)
                    <tbody>
                    <tr class="text-center align-content-center">
                        <td align="center">{{$loop->iteration}}</td>
                        <td>{{$tt['id']}}</td>
                        <td>{{$tt['nama']}}</td>
                        <td>{{$tt['kategori']}}</td>
                        <td style="width: 130px;" align="center">
                            <div class="form-row justify-content-center">
                            <form class="m-1 " action="/datadokter/{{$tt['id']}}/edit" method="GET">
                                @csrf
                                <button class="btn btn-circle" type="submit"><img src="{{asset('ws-dokter/img/edit.png')}}" style="width: 20px; margin-right: 15px"></button>
                            </form>
                            <form class="m-1" action="/datadokter/{{$tt['id']}}" method="post" >

                                @csrf
                                @method('delete')
                                <button class="btn btn-circle" type="submit"><img src="{{asset('ws-dokter/img/delete-2.png')}}" style="width: 20px"></button>

                            </form>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection
