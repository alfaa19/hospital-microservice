@extends('main')
@section('tabeljadwaldokter')
    <h1 class="h3 mb-2 text-gray-800">Form Pendaftaran</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">

            <form method="post" action="/jadwal">
                @csrf @method('post')
                <div class="form-group col-md-4">
                    <label for="id">ID Dokter</label>
                    <input type="number" class="form-control" id="id" name="id_dokter" aria-describedby="emailHelp" placeholder="ID Dokter">

                </div>
                <div class="form-group col-md-4">
                    <label for="Hari">Hari</label>
                    <input type="text" class="form-control" id="Hari" name="hari" placeholder="Hari">
                </div>
                <div class="form-group col-md-4">
                    <label for="Jam">Jam</label>
                    <input type="text" class="form-control" id="Jam" name="jam" placeholder="Jam">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
@endsection
