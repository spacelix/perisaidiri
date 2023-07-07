<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tingkatan;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.User.index', [
            'anggotas' => User::paginate(15)->except([1]),
            'units' => Unit::all(),
            'tingkatans' => Tingkatan::all(),
        ]);
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
//        dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'unit_id' => 'required|exists:units,id',
            'password' => 'required|min:8|confirmed',
            'tingkatan_id' => 'required|exists:tingkatans,id',
            'no_anggota' => 'required|string|unique:users,no_anggota',
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $foto = $request->file('foto');
        $foto_name = Str::slug($request->name) . '-' . Str::random(5) . '.' . $foto->getClientOriginalExtension();
        $foto->storeAs('anggota', $foto_name);

        User::create([
            'name' => $name = $request->name,
            'slug' => Str::slug($name) . '-' . Str::random(5),
            'email' => $request->email,
            'unit_id' => $request->unit_id,
            'password' => bcrypt($request->password),
            'tingkatan_id' => $request->tingkatan_id,
            'no_anggota' => $request->no_anggota,
            'alamat' => $request->alamat,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $foto_name,
        ]);

        flash()->addSuccess('Anggota berhasil ditambahkan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user, $anggota)
    {
        $anggota = User::where('slug', $anggota)->firstOrFail();
        return view('Admin.User.show', [
            'anggota' => $anggota,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $anggota)
    {
        $anggota = User::where('slug', $anggota)->firstOrFail();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $anggota->id,
            'unit_id' => 'required|exists:units,id',
            'password' => 'nullable|min:8|confirmed',
            'tingkatan_id' => 'required|exists:tingkatans,id',
            'no_anggota' => 'required|string|unique:users,no_anggota,' . $anggota->id,
            'alamat' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            Storage::delete('anggota/' . $anggota->foto);
            $foto = $request->file('foto');
            $foto_name = Str::slug($request->name) . '-' . Str::random(5) . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('anggota', $foto_name);
        } else {
            $foto_name = $anggota->foto;
        }

        $anggota->update([
            'name' => $name = $request->name,
            'email' => $request->email,
            'unit_id' => $request->unit_id,
            'password' => $request->password ? bcrypt($request->password) : $anggota->password,
            'tingkatan_id' => $request->tingkatan_id,
            'no_anggota' => $request->no_anggota,
            'alamat' => $request->alamat,
            'tanggal_lahir' => Carbon::parse($request->tanggal_lahir)->format('Y-m-d'),
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => $foto_name,
        ]);

        flash()->addSuccess('Anggota berhasil diubah');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $anggota)
    {
        $anggota = User::where('slug', $anggota)->firstOrFail();
        Storage::delete('anggota/' . $anggota->foto);
        $anggota->delete();
        flash()->addSuccess('Anggota berhasil dihapus');
        return back();
    }
}
