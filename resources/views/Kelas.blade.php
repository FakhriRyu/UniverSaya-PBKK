@extends('layouts.main')

@section('container')
<h1 class="mb-4">Mata Kuliah</h1>
<div class="d-flex flex-wrap">
    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top equal-image" src="images/PBKK.gif" alt="Pemrograman Berbasis Kerangka Kerja">
        <div class="card-body">
            <h5 class="card-title">Proyek PBKK</h5>
            <p class="card-text">Tidak Ada Tugas</p>
            <a href="#" class="btn btn-primary">Lihat</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top equal-image" src="images/metnumb.gif" alt="Metode Numerik">
        <div class="card-body">
            <h5 class="card-title">Metode Numerik</h5>
            <p class="card-text">Tidak Ada Tugas</p>
            <a href="#" class="btn btn-primary">Lihat</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top equal-image" src="images/ST.gif" alt="Metode Numerik">
        <div class="card-body">
            <h5 class="card-title">Sistem Terdistribusi</h5>
            <p class="card-text">Tidak Ada Tugas</p>
            <a href="#" class="btn btn-primary">Lihat</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top equal-image" src="images/ML.gif" alt="Metode Numerik">
        <div class="card-body">
            <h5 class="card-title">Mesin Pembelajar</h5>
            <p class="card-text">Tidak Ada Tugas</p>
            <a href="#" class="btn btn-primary">Lihat</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top equal-image" src="images/ET.gif" alt="Metode Numerik">
        <div class="card-body">
            <h5 class="card-title">Etika Profesi</h5>
            <p class="card-text">Tidak Ada Tugas</p>
            <a href="#" class="btn btn-primary">Lihat</a>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <img class="card-img-top equal-image" src="images/RO.gif" alt="Metode Numerik">
        <div class="card-body">
            <h5 class="card-title">Riset Operasi</h5>
            <p class="card-text">Tidak Ada Tugas</p>
            <a href="#" class="btn btn-primary">Lihat</a>
        </div>
    </div>
</div>

<style>
    /* CSS khusus untuk mengatur dimensi gambar */
    .equal-image {
        width: 100%;
        height: 150px; /* Sesuaikan tinggi yang Anda inginkan */
        object-fit: cover; /* Agar gambar terisi penuh tanpa merusak aspek ratio */
    }

    h1{
        text-align: center;
        font-weight: bold;
    }
</style>
@endsection
