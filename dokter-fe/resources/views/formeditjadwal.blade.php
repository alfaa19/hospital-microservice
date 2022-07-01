@extends('main')
@section('tabeljadwaldokter')
    <h1 class="h3 mb-2 text-gray-800">Form Pendaftaran</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">

        </div>
        <div class="card-body">

            <form method="post" action="/jadwal/{{$pass['id']}}">
                @csrf @method('put')
                <div class="form-group col-md-4">
                    <label for="hari">Hari</label>
                    <input type="text" class="form-control" id="hari" name="hari" aria-describedby="emailHelp" placeholder="Hari" value="{{$pass['hari']}}">

                </div>
                <div class="form-group col-md-4">
                    <label for="Jam">Jam</label>
                    <input type="text" class="form-control" id="Jam" name="jam" placeholder="Jam" value="{{$pass['jam']}}">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>
@endsection
