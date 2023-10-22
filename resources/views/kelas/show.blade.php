@extends('layouts.main')

@section('container')
<div class="container">
    <h1>{{ $kelas->matkul }}</h1>
<img src="{{ asset('storage/' . $kelas->image) }}" alt="{{ $kelas->matkul }}" class="img-fluid mb-4">
<p class="text-muted">Status: {{ $kelas->status }}</p>

<h2>Catatan</h2>
<ul>
    @foreach ($kelas->notes as $note)
        <li><b>{{ $note->judul }}</b> <br> {{ $note->isi }}</li> <br>
    @endforeach
</ul>
</div>

<style>
    li {
        text-align: justify;
    }
</style>
@endsection
