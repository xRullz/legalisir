@extends('layout.navbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-body">

                        <div class="row ">
                            <div class="col-md-4">
                                <label for="">Nisn :</label>
                                <input type="text" class="form-control" name="nisn" value="{{ $siswa->nisn }}" readonly>
                            </div>
                            <div class="col-md-8">
                                <label for="">Nama :</label>
                                <input type="text" class="form-control" name="nama" value="{{ $siswa->nama }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8">
                                <label for="">Tempat Lahir:</label>
                                <input type="text" class="form-control" name="tmp_lahir" value="{{ $siswa->tmp_lahir }}" readonly>
                            </div>
                            <div class="col-md-4">
                                <label for="">Tanggal Lahir:</label>
                                <input type="text" class="form-control" name="tgl_lahir" value="{{ $siswa->tgl_lahir }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-4">
                                <label for="">Kelas:</label>
                                <input type="text" class="form-control" name="kelas" value="{{ $siswa->kelas }}" readonly>
                            </div>
                            <div class="col-md-8">
                                <label for="">Tahun Lulus:</label>
                                <input type="text" class="form-control" name="thn_lulus" value="{{ $siswa->thn_lulus }}" readonly>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label for="">Kompotensi Keahlian:</label>
                                <input type="text" class="form-control" readonly>
                            </div>
                        </div>
                        <button class="btn btn-success mt-3 " target="blank__">Preview Ijazah</button>
                        <button class="btn btn-success mt-3 right-block">??</button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
