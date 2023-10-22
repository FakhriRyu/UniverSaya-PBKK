<?php

namespace App\Http\Controllers;

// app/Http/Controllers/NotesController.php

use App\Models\Note;
use Illuminate\Http\Request;
use App\Models\Kelas;

class NoteController extends Controller
{
    public function index()
{
    $notes = Note::all(); // Mengambil semua data catatan dari database

    return view('notes.index', [
        'title' => 'Catatan Kuliah',
        'notes' => $notes, // Meneruskan data catatan ke tampilan
    ]);
}



    public function store(Request $request)
    {
        // Validasi data input dari form
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kelas_id' => 'required',
        ]);

        // Simpan catatan baru ke database
        Note::create($validatedData);

        return redirect('/notes')->with('success', 'Catatan berhasil ditambahkan.');
    }

    public function create()
    {
        $kelas = Kelas::all(); // Mengambil data mata kuliah (kelas) dari tabel kelas

        return view('notes.create', [
            'title' => 'Tambah Catatan Baru',
            'kelas' => $kelas, // Meneruskan data mata kuliah ke tampilan create
        ]);

    }



public function edit(Note $note)
{
    // Ambil data kelas yang diperlukan
    $kelas = Note::all(); // Gantilah dengan metode yang sesuai untuk mengambil data kelas
    
    return view('notes.edit', compact('note', 'kelas'));
}


    public function update(Request $request, Note $note)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kelas_id' => 'required',
        ]);

        $note->update($validatedData);

        return redirect('/notes')->with('success', 'Catatan berhasil diperbarui.');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect('/notes')->with('success', 'Catatan berhasil dihapus.');
    }
}
