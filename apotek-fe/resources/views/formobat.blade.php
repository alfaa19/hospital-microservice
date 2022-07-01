@extends('main')
@section('tabeldataobat')
    <h1 class="h3 mb-2 text-gray-800">Form Pendaftaran</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">

            <form method="post" action="/apotek">
                @csrf @method('post')
                <div class="form-group col-md-4">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Nama Obat">

                </div>
                <div class="form-group col-md-4">
                    <label for="Bentuk">Bentuk</label>
                    <input type="text" class="form-control" id="Bentuk" name="bentuk" placeholder="Bentuk Obat">
                </div>
                <div class="form-group col-md-4">
                    <label for="Konsumen">Konsumen</label>
                    <input type="text" class="form-control" id="Konsumen" name="konsumen" placeholder="Konsumen">
                </div>
                <div class="form-group col-md-4">
                    <label for="Harga">Harga</label>
                    <input type="number" class="form-control" id="Harga" name="harga" placeholder="Harga">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
