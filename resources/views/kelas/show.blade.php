@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="mb-4">{{ $kelas->matkul }}</h1>

    <img src="{{ asset('storage/' . $kelas->image) }}" alt="{{ $kelas->matkul }}" class="img-fluid mb-4">

    <p class="text-muted">Status: {{ $kelas->status }}</p>

    <!-- Tampilkan konten atau detail lainnya sesuai kebutuhan -->
</div>
@endsection
