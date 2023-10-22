@extends('layouts.main')

@section('container')
    <h1>Daftar Catatan</h1>

    <a href="{{ route('notes.create') }}" class="btn btn-primary mb-3">Tambah Catatan</a>

    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->judul }}</td>
                    <td>{{ $note->kelas->matkul }}</td>
                    <td>
                        <a href="{{ route('notes.edit', $note) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('notes.destroy', $note) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
