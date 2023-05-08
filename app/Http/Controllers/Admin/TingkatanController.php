<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tingkatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TingkatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tingkatan::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name) . '-' . Str::random(5),
        ]);
        flash()->addSuccess('Tingkatan berhasil ditambahkan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tingkatan $tingakatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tingkatan $tingakatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tingkatan $tingkatan, $item)
    {
        $request->validate([
            'name' => ['required']
        ]);
        $tingkatan = Tingkatan::where('slug', $item)->firstOrFail();
        $tingkatan->update([
            'name' => $request->name,
        ]);
        flash()->addSuccess('Tingkatan berhasil diubah');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tingkatan $tingkatan, $slug)
    {
        $tingkatan = Tingkatan::where('slug', $slug)->firstOrFail();
        $tingkatan->delete();
        flash()->addSuccess('Tingkatan berhasil dihapus');
        return back();
    }
}
