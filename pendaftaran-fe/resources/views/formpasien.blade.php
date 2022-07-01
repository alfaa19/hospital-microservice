@extends('layout.main')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Form Pendaftaran</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">

            <form method="post" action="/dashboard/pasien">
                @csrf @method('post')
                <div class="form-group col-md-4">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Pasien">

                </div>
                <div class="form-group col-md-4">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Alamat">
                </div>

                <div class="form-group col-md-4">
                    <label for="kontak">Kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" aria-describedby="emailHelp" placeholder="Kontak Pasien">

                </div>
                <div class="form-group col-md-4">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin">
                </div>

                <div class="form-group col-md-4">
                    <label for="usia">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" aria-describedby="emailHelp" placeholder="Usia">

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
@endsection
