<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nta'=> 'required|unique:anggotas,nta',
            'nama_lengkap'=>'required',
            'foto_pramuka'=>'image|mimes:jpeg,png,jpg|max:2040',
        ]);

        $data = $request->all();

        // 1. Amankan Foto Pramuka (Ubah ke Base64 untuk Vercel)
        if($request->hasFile('foto_pramuka')){ 
            $file = $request->file('foto_pramuka');
            $base64 = base64_encode(file_get_contents($file));
            $data['foto_pramuka'] = 'data:' . $file->getClientMimeType() . ';base64,' . $base64;
        }

        // 2. Amankan Sertifikat (Typo extension sudah diperbaiki)
        if($request->hasFile('sertifikat_sfh')){
            $fileSertif = $request->file('sertifikat_sfh');
            $base64Sertif = base64_encode(file_get_contents($fileSertif));
            $data['sertifikat_sfh'] = 'data:' . $fileSertif->getClientMimeType() . ';base64,' . $base64Sertif;
        }

        Anggota::create($data);

        return back()->with('success', 'Data anggota berhasil disimpan ⚜️');
    }

    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('form', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $anggota = Anggota::findOrFail($id);
        $data = $request->all();

        // 3. Amankan Foto Pramuka saat Update Data
        if ($request->hasFile('foto_pramuka')) {
            $file = $request->file('foto_pramuka');
            $base64 = base64_encode(file_get_contents($file));
            $data['foto_pramuka'] = 'data:' . $file->getClientMimeType() . ';base64,' . $base64;
        }

        // 4. Tambahan: Amankan Sertifikat saat Update Data (sebelumnya belum ada di kodemu)
        if($request->hasFile('sertifikat_sfh')){
            $fileSertif = $request->file('sertifikat_sfh');
            $base64Sertif = base64_encode(file_get_contents($fileSertif));
            $data['sertifikat_sfh'] = 'data:' . $fileSertif->getClientMimeType() . ';base64,' . $base64Sertif;
        }

        $anggota->update($data);

        // Arahkan kembali ke /beranda setelah selesai edit
        return redirect('/beranda')->with('success', 'Profil kamu berhasil diperbarui! ✨');
    }
}