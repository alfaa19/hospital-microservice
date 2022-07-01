@extends('main')
@section('tabeljadwaldokter')

    <div class="card shadow mb-4">
        <div class="card-body">
            <a class="btn btn-success mb-3" href="/jadwal/create">Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>Nama Dokter</th>
                        <th>Kategori</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th>Opsi</th>
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
                        <td style="width: 130px;" align="center">
                            <div class="form-row justify-content-center">
                                <form class="m-1 " action="/jadwal/{{$tt['id']}}/edit" method="GET">
                                    @csrf
                                    <button class="btn btn-circle" type="submit"><img src="{{asset('ws-dokter/img/edit.png')}}" style="width: 20px; margin-right: 15px"></button>
                                </form>
                                <form class="m-1" action="/jadwal/{{$tt['id']}}" method="post" >

                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-circle" type="submit"><img src="{{asset('ws-dokter/img/delete-2.png')}}" style="width: 20px"></button>

                                </form>
                            </div>
                        </td>
                    </tr>


                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
