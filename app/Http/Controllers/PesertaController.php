<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use App\Models\SkemaSertifikasi;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
   public function index(Request $request)
{
    $keyword = $request->input('keyword');

    if ($keyword) {
        $data_peserta = Peserta::with('skema')
            ->where('nama', 'like', '%' . $keyword . '%')
            ->orWhere('email', 'like', '%' . $keyword . '%')
            ->orWhere('no_hp', 'like', '%' . $keyword . '%')
            ->get();
    } else {
        $data_peserta = Peserta::with('skema')->get();
    }

    return view('peserta', compact('data_peserta', 'keyword'));
}

    public function create()
    {
        $data_skema = SkemaSertifikasi::all();

        return view('peserta_create', compact('data_skema'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'skema_id' => 'required|exists:skema_sertifikasis,id',
        ], [
            'nama.required' => 'Nama peserta wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'no_hp.required' => 'Nomor HP wajib diisi.',
            'alamat.required' => 'Alamat wajib diisi.',
            'skema_id.required' => 'Skema sertifikasi wajib dipilih.',
            'skema_id.exists' => 'Skema sertifikasi tidak valid.',
        ]);

        Peserta::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'skema_id' => $request->skema_id,
        ]);

        return redirect()
            ->route('peserta.index')
            ->with('success', 'Data peserta berhasil ditambahkan.');
    }

    public function show($id)
    {
        $peserta = Peserta::with('skema')->findOrFail($id);

        return view('peserta_detail', compact('peserta'));
    }

    public function edit($id)
    {
        $peserta = Peserta::findOrFail($id);
        $data_skema = SkemaSertifikasi::all();

        return view(
            'peserta_edit',
            compact('peserta', 'data_skema')
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'alamat' => 'required',
            'skema_id' => 'required|exists:skema_sertifikasis,id',
        ]);

        $peserta = Peserta::findOrFail($id);

        $peserta->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'skema_id' => $request->skema_id,
        ]);

        return redirect()
            ->route('peserta.index')
            ->with('success', 'Data peserta berhasil diubah.');
    }

    public function destroy($id)
    {
        $peserta = Peserta::findOrFail($id);

        $peserta->delete();

        return redirect()
            ->route('peserta.index')
            ->with('success', 'Data peserta berhasil dihapus.');
    }
}