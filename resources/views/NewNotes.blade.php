@extends('layouts.main')

@section('container')
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        textarea {
            width: 100%;
            height: 200px;
        }
        button {
            margin-top: 10px;
        }
    </style>
    <div class="container">
        <h1>Catatan Mata Kuliah Baru</h1>
        <form id="noteForm">
            <div class="form-group">
                <label for="courseName">Nama Mata Kuliah:</label>
                <input type="text" id="courseName" name="courseName" required>
            </div>
            <div class="form-group">
                <label for="note">Catatan:</label>
                <textarea id="note" name="note" required></textarea>
            </div>
            <button type="submit">Simpan Catatan</button>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const noteForm = document.getElementById("noteForm");
            
            noteForm.addEventListener("submit", function(event) {
                event.preventDefault();
                const courseName = document.getElementById("courseName").value;
                const note = document.getElementById("note").value;
                
                // Simpan catatan ke penyimpanan (misalnya, Local Storage atau database)
                // Di sini Anda dapat menambahkan kode untuk menyimpan catatan
                
                alert(`Catatan untuk mata kuliah "${courseName}" telah disimpan.`);
                
                // Bersihkan formulir
                noteForm.reset();
            });
        });
    </script>
@endsection