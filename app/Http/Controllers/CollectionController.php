<?php

namespace App\Http\Controllers;

use App\DataTables\KoleksiDataTable;
use Illuminate\Http\Request;
use App\Models\Collection;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Sesion;

//Aufar Hadni Azzakky 4603 6706223109

class CollectionController extends Controller
{
   // public function index() {
    //     $koleksi = Koleksi::all();
    //     return view('koleksi.daftarKoleksi', compact('koleksi'));
    // }

    public function index(KoleksiDataTable $dataTable)
    {
        return $dataTable->render('koleksi.daftarKoleksi');
    }

    public function show($id)
    {
        $koleksi = Collection::findOrFail($id);
        return view('koleksi.infoKoleksi', compact('koleksi'));
    }

    public function create()
    {
    return view('koleksi.registrasi');
    }

    public function store(Request $request)
    {
    $request->validate([
        'namaKoleksi' => 'required|string|max:255',
        'jenisKoleksi' => 'required|string|max:255',
        'jumlahKoleksi' => 'required|integer',
    ]);
    Collection::create([
        'namaKoleksi' => $request->namaKoleksi,
        'jenisKoleksi' => $request->jenisKoleksi,
        'jumlahKoleksi' => $request->jumlahKoleksi,
    ]);
    // return redirect()->route('koleksi.store')->with('success', 'Koleksi berhasil ditambahkan!');
    Session::flash('success', 'Koleksi berhasil ditambahkan!');
    return redirect()->route('koleksi.registrasi');
}
}
