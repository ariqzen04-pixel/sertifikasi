<?php

namespace App\Http\Controllers;

use App\Models\SkemaSertifikasi;
use Illuminate\Http\Request;

class SkemaSertifikasiController extends Controller
{
    public function index()
    {
        $data_skema = SkemaSertifikasi::all();

        return view('skema', compact('data_skema'));
    }

    public function create()
    {
        return view('skema_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_skema' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama_skema.required' => 'Nama skema wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        SkemaSertifikasi::create([
            'nama_skema' => $request->nama_skema,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('skema.index')
            ->with('success', 'Data skema berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $skema = SkemaSertifikasi::findOrFail($id);

        return view('skema_edit', compact('skema'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_skema' => 'required',
            'deskripsi' => 'required',
        ], [
            'nama_skema.required' => 'Nama skema wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        $skema = SkemaSertifikasi::findOrFail($id);

        $skema->update([
            'nama_skema' => $request->nama_skema,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('skema.index')
            ->with('success', 'Data skema berhasil diubah.');
    }

    public function destroy($id)
    {
        $skema = SkemaSertifikasi::findOrFail($id);

        $skema->delete();

        return redirect()
            ->route('skema.index')
            ->with('success', 'Data skema berhasil dihapus.');
    }
}