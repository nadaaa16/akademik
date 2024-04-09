<?php

namespace App\Http\Controllers;
use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
    public function index()
    {
        $rayon = Rayon::all();
        return view('admin.rayon.index', compact('rayon'));
    }

    public function create()
    {
        return view('admin.rayon.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rayon' => 'required'
        ]);

        Rayon::create([
            'rayon' => $request->rayon
        ]);
        return redirect()->route('rayon');

    }

    public function destroy($id)
    {
        $data = Rayon::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('rayon');
    }
}
