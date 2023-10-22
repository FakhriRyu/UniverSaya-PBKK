@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Edit Kelas</h1>

        <form action="{{ route('kelas.update', $kelas) }}" method="POST">
            @csrf
            @method('PUT') <!-- Gunakan PUT method untuk operasi update -->

            <div class="form-group">
                <label for="matkul">Nama Mata Kuliah</label>
                <input type="text" name="matkul" id="matkul" class="form-control" value="{{ $kelas->matkul }}">
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Ada Tugas" {{ $kelas->status === 'Ada Tugas' ? 'selected' : '' }}>Ada Tugas</option>
                    <option value="Tidak Ada Tugas" {{ $kelas->status === 'Tidak Ada Tugas' ? 'selected' : '' }}>Tidak Ada Tugas</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>
@endsection