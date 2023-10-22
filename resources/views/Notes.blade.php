@extends('layouts.main')

@section('container')
<h1>Catatan Kuliah</h1>
<a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Tambah</a>



<style>
    h1 {
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
</style>
@endsection
