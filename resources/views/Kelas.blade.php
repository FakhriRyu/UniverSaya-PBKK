@extends('layouts.main')

@section('container')
<h1 class="mb-4">Mata Kuliah</h1>
<a href="/create" class="btn btn-primary mb-3">Tambah</a>

<div class="d-flex flex-wrap">
        @foreach($kelas as $kelas)
                <div class="card m-2" style="width: 18rem;">
                    <img class="card-img-top equal-image" src="{{ asset('storage/' . $kelas->image) }}" alt="{{ $kelas->matkul }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $kelas->matkul }}</h5>
                        <p class="card-text">{{ $kelas->status }}</p>
                        <a href="{{ route('kelas.show', $kelas) }}" class="btn btn-primary">Lihat</a>
                        <a href="{{ route('kelas.edit', $kelas) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kelas.destroy', $kelas) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
        @endforeach
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
