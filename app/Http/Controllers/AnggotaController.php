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

        if($request->hasFile('foto_pramuka')){ 
            $fotoNama = time(). ' _foto.' . $request->foto_pramuka->extension();
            $request->foto_pramuka->move(public_path('uploads/foto'), $fotoNama);
            $data['foto_pramuka']=$fotoNama;
        }

        if($request->hasFile('sertifikat_sfh')){
            $sertiNama=time(). ' _sertif. ' .$request->sertifikat_sfhextension();
            $request->sertifikat_sfh->move(public_path('uploads/sertifikat'), $sertiNama);
            $data['sertifikat_sfh']=$sertiNama;
        }

        Anggota::create($data);

        return back()->with('success', ' data anggota berhasil disimpan⚜️');
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

        if ($request->hasFile('foto_pramuka')) {
        $file = $request->file('foto_pramuka');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('uploads/foto'), $nama_file);
        $data['foto_pramuka'] = $nama_file;
        }

    
        $anggota->update($data);

    
        return redirect('/')->with('success', 'Profil kamu berhasil diperbarui! ✨');
    }
}
