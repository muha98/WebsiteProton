@extends('layouts/app')



@section('title','About')






@section('container2')

    <h1 style="text-align: center">PILIHAN PROGRAM</h1>

    <div class="container-fluid" style="margin-bottom: 30px">
        <div class="row" style="margin-top: 20px">
            <div class="col-md-12 col-xs-12">
                <center>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ ('img/UjianSD.PNG') }}" class="img-fluid" alt="Responsive image" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Program Sukses Ujian SD</h5>
                                    <p>Diperuntukan Untuk Semua Siswa SD baik kelas 1 sampai 6</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ ('img/SuksesSMP.PNG') }}" class="img-fluid" alt="Responsive image" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Program Sukses SMP</h5>
                                    <p>Di peruntukan untuk semua Siswa SMP/MTs dari kelas 1 sampai 3</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ ('img/SuksesSMA.PNG') }}" class="img-fluid" alt="Responsive image" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Program Sukses SMA</h5>
                                    <p>Diperuntukan untuk Siswa SMA/MA dari kelas 1 sampai 3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-bottom: 30px">
        <div class="row" style="margin-top: 20px">
            <div class="col-md-12 col-xs-12">
                <center>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ ('img/S3.PNG') }}" class="img-fluid" alt="Responsive image" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Program S3</h5>
                                    <p>Program Sukses Seleksi SNMPTN untuk alumni atau siswa SMA kelas 3</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ ('img/Kedinasan.PNG') }}" class="img-fluid" alt="Responsive image" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Program Kedinasan</h5>
                                    <p>Melatih Tes kedinasaan dar STAN, STIS, IPDN dan kedinasan lain</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ ('img/Polri.PNG') }}" class="img-fluid" alt="Responsive image" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-text">Sukses POLRI</h5>
                                    <p>Melatih siswa yang ingin tes akademik dan Psikotes POLRI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>

            </div>
        </div>
    </div>





@endsection
