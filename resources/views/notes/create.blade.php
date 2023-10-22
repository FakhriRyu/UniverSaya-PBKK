@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Tambah Catatan</h1>
    <form action="{{ route('notes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="isi" class="form-label">Isi</label>
            <textarea class="form-control" id="isi" name="isi" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="kelas_id" class="form-label">Mata Kuliah</label>
            <select class="form-select" id="kelas_id" name="kelas_id" required>
                @if (!empty($kelas) && is_array($kelas))
                    @if (count($kelas) > 0)
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->matkul }}</option>
                        @endforeach
                    @else
                        <option value="">Pilih Mata Kuliah</option>
                    @endif
                @else
                    <option value="">Pilih Mata Kuliah</option>
                    <p>Tidak ada data kelas yang tersedia.</p>
                @endif
            </select>            
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@endsection
