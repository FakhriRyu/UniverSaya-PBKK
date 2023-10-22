@extends('layouts.main')

@section('container')
    <h1>Detail Catatan</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $note->judul }}</h5>
            <p class="card-text">{{ $note->isi }}</p>
            <p class="card-text">Mata Kuliah: {{ $note->kelas->matkul }}</p>
        </div>
    </div>

    <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning mt-3">Edit</a>
    <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3">Hapus</button>
    </form>
@endsection
