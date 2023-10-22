<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\Response; // Impor kelas Response

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all(); // Mengambil semua data kelas dari database

        // Mengembalikan tampilan sebagai respons
        return view('kelas', [
            'title' => 'Mata kuliah',
            'kelas' => $kelas, // Meneruskan data kelas ke tampilan
        ]);
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create', ['title' => 'Tambah Kelas']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'matkul' => 'required',
            'image' => 'required|image', // Pastikan ini adalah tipe gambar yang diizinkan
            'status' => 'required',
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $imageName);
            $validatedData['image'] = $imageName;
        }
    
        Kelas::create($validatedData);
    
        return redirect('/kelas')->with('success', 'Data Kelas berhasil ditambahkan.');
    }
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        $title = 'Detail Mata Kuliah - ' . $kelas->matkul; // Inisialisasi variabel $title

        // Mengembalikan tampilan sebagai respons
        return view('kelas.show', compact('kelas', 'title'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
{
    $title = 'Edit Kelas - ' . $kelas->matkul; // Inisialisasi variabel $title
    return view('.kelas.edit', compact('kelas', 'title'));
}



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
{
    // Validasi data jika diperlukan
    
    $kelas->update([
        'matkul' => $request->input('matkul'),
        'status' => $request->input('status'),
        // Update atribut lainnya sesuai kebutuhan
    ]);

    return redirect()->route('kelas.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
{
    $kelas->delete(); // Hapus data kelas dari database

    return redirect()->route('kelas.index')
        ->with('success', 'Kelas berhasil dihapus');
}

}
