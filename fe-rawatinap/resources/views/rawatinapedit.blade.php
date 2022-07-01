@extends('layout.main')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Form Pendaftaran</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">

            <form method="post" action="/rawatinap/{{$data[0]['id']}}">
                @csrf @method('put')
                <div class="form-group col-md-4">
                    <label for="nama">ID Pasien</label>
                    <input type="number" class="form-control" id="id" name="id_passien" aria-describedby="emailHelp" placeholder="ID Pasien" value="{{$data[0]['pasien']['id']}}">

                </div>
                <div class="form-group col-md-4">
                    <label for="ruangan">Ruangan</label>
                    <input type="text" class="form-control" id="ruangan" name="jenis_kamar" placeholder="Ruangan" value="{{$data[0]['kelas']}}" >
                </div>

                <div class="form-group col-md-4">
                    <label for="diagnosa">Diagnosa</label>
                    <input type="text" class="form-control" id="diagnosa" name="diagnosa" aria-describedby="emailHelp" placeholder="Diagnosa" value="{{$data[0]['diagnosa']}}" >
                </div>
                <div class="form-group col-md-4">
                    <label for="lama_dirawat">Lama Dirawat</label>
                    <input type="number" class="form-control" id="id" name="lama_dirawat"   aria-describedby="emailHelp" placeholder="Lama Dirawat" value="{{$data[0]['lama_dirawat']}}">

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
@endsection
