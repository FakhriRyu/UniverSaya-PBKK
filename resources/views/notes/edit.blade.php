@extends('layouts.main')

@section('container')
    <h1>Edit Catatan</h1>

    <form action="{{ route('notes.update', $note) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $note->judul }}" required>
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control" id="isi" name="isi" rows="5" required>{{ $note->isi }}</textarea>
        </div>
        <div class="form-group">
            <label for="kelas_id" class="form-label">Mata Kuliah</label>
            <select class="form-select" id="kelas_id" name="kelas_id" required>
                <option value="">Pilih Mata Kuliah</option>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->matkul }}</option>
                @endforeach
            </select>            
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan Perubahan</button>
    </form>
@endsection
