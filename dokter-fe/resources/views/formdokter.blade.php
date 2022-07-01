@extends('main')
@section('tabeljadwaldokter')
    <h1 class="h3 mb-2 text-gray-800">Form Pendaftaran</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">

            <form method="post" action="/datadokter">
                @csrf @method('put')
                <div class="form-group col-md-4">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Dokter">

                </div>
                <div class="form-group col-md-4">
                    <label for="Kategori">Kategori</label>
                    <input type="text" class="form-control" id="Kategori" name="kategori" placeholder="Kategori">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
@endsection
