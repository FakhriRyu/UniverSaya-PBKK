@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>Tambah Kelas</h1>
        <form action="{{ route('kelas.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="matkul">Mata Kuliah</label>
                <input type="text" name="matkul" id="matkul" class="form-control" placeholder="Masukkan Nama Mata Kuliah">
            </div>
            
            <div class="form-group mt-3">
                <label for="image">Gambar</label><br>
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
            
            <div class="form-group mt-3">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="Ada Tugas">Ada Tugas</option>
                    <option value="Tidak Ada Tugas">Tidak Ada Tugas</option>
                </select>
            </div>
            

            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
@endsection
