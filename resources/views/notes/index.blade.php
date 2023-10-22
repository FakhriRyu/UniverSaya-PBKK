@extends('layouts.main')

@section('container')
    <h1>Daftar Catatan</h1>
    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Tambah</a>

    <style>
        .equal-height-card {
            height: 100%;
        }
    </style>

    <div class="row">
        @foreach ($notes as $note)
            <div class="col-md-4 mb-3">
                <div class="card equal-height-card"> <!-- Tambahkan kelas equal-height-card di sini -->
                    <div class="card-body">
                        <h5 class="card-title">{{ $note->judul }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $note->kelas->matkul }}</h6>
                        <p class="card-text">{{ substr($note->isi, 0, 100) }}{{ strlen($note->isi) > 100 ? '...' : '' }}</p>
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        h1{
            text-align: center;
            font-weight: bold;
        }
    </style>
@endsection


