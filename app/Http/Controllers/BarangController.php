<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Dijual;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function saveDijual(Request $request)
    {
        $validated = $request->validate([
            'noFaktur' => 'required|string|max:6',
            'kode_barang' => 'required|string|max:10',
            'harga_barang' => 'required|numeric',
            'qty' => 'required|integer',
            'diskon' => 'nullable|numeric',
            'bruto' => 'required|numeric',
            'jumlah' => 'required|numeric'
        ]);

        $barang = new Dijual();
        $barang->NO_FAKTUR = $validated['noFaktur'];
        $barang->KODE_BARANG = $validated['kode_barang'];
        $barang->HARGA = $validated['harga_barang'];
        $barang->QTY = $validated['qty'];
        $barang->DISKON = $validated['diskon'];
        $barang->BRUTO = $validated['bruto'];
        $barang->JUMLAH = $validated['jumlah'];
        $barang->save();

        return response()->json(['success' => true, 'message' => 'Data saved successfully!']);
    }

    public function cariDijual(Request $request)
    {
        $noFaktur = $request->input('noFaktur');
        $dijuals = Dijual::where('NO_FAKTUR', $noFaktur)->get();
        // dd($dijuals);

        return response()->json([
            'dijuals' => $dijuals
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
