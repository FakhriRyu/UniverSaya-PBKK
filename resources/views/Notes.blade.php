@extends('layouts.main')

@section('container')
<h1>Catatan Kuliah</h1>
<a href="/NewNotes" class="button-link">Tambah</a>
<div class="d-flex flex-wrap mt-3">
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">PBKK</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pertemuan 3</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Buka</a>
        </div>
    </div>
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Sistem Terdistribusi</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pertemuan 1</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Buka</a>
        </div>
    </div>
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Sistem Terdistribusi</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pertemuan 2</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Buka</a>
        </div>
    </div>
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Riset Operasi</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pertemuan 5</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Buka</a>
        </div>
    </div>
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Mesin Pembelajar</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pertemuan 2</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Buka</a>
        </div>
    </div>
    <div class="card m-1" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Etika Profesi</h5>
            <h6 class="card-subtitle mb-2 text-muted">Pertemuan 1</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Buka</a>
        </div>
    </div>
</div>
<style>
    h1{
        font-weight: bold;
        text-align: center;
    }

    .button-link {
            display: inline-block;
            padding: 5px 14px;
            background-color: #333333; /* Warna latar belakang */
            color: #fff; /* Warna teks */
            text-decoration: none; /* Hilangkan garis bawah tautan */
            border: none; /* Hilangkan batas */
            border-radius: 5px; /* Sudut melengkung */
            cursor: pointer;
        }
@endsection
