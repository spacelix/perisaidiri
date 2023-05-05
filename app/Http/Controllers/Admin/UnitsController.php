<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::paginate('6');
        return view('Admin.Units.index', [
            'units' => $units
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'], 'sekretariat' => ['required'], 'contact' => ['required']
        ]);
        Unit::create([
            'name' => $name = $request->name,
            'slug' => Str::slug($name . Str::random(6)),
            'sekretariat' => $request->sekretariat,
            'contact' => $request->contact,
            'ketua' => $request->ketua,
            'w_ketua' => $request->w_ketua,
            'sekretaris' => $request->sekretaris,
            'bendahara' => $request->bendahara
        ]);
        flash()->addSuccess('Units/Ranting Berhasil Ditambahkan!');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $item)
    {
        $request->validate([
            'name' => ['required'], 'sekretariat' => ['required'], 'contact' => ['required']
        ]);
        $unit = Unit::where('slug', $item)->firstOrFail();
        $unit->update([
            'name' => $request->name,
            'sekretariat' => $request->sekretariat,
            'contact' => $request->contact,
            'ketua' => $request->ketua,
            'w_ketua' => $request->w_ketua,
            'sekretaris' => $request->sekretaris,
            'bendahara' => $request->bendahara
        ]);
        flash()->addSuccess('Units/Ranting Berhasil Diubah!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $unit = Unit::where('slug', $slug)->firstOrFail();
        $unit->delete();
        flash()->addSuccess('Units/Ranting Berhasil Dihapus!');
        return back();
    }
}
