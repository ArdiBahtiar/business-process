<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Dijual;
use App\Models\Jual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    
        // Fetch the Jual record
        $jual = Jual::where('NO_FAKTUR', $noFaktur)->first();
    
        // Fetch the Dijual records associated with the Jual
        $dijuals = DB::table('dijuals')
        ->join('barangs', 'dijuals.KODE_BARANG', '=', 'barangs.KODE_BARANG')
        ->where('dijuals.NO_FAKTUR', $noFaktur)
        ->select('dijuals.*', 'barangs.NAMA_BARANG') // Fetch all dijuals fields + NAMA_BARANG
        ->get();

        if ($jual) {
            return response()->json([
                'jual' => $jual,
                'dijuals' => $dijuals
            ]);
        } else {
            return response()->json(['message' => 'Record not found'], 404);
        }
    }

    public function autofill(Request $request)
    {
        $noFaktur = $request->input('noFaktur');
        // $dijuals = Dijual::where('NO_FAKTUR', $noFaktur)->get();
        $dijuals = DB::table('dijuals')
            ->join('barangs', 'dijuals.KODE_BARANG', '=', 'barangs.KODE_BARANG')
            ->where('dijuals.NO_FAKTUR', $noFaktur)
            ->select('dijuals.*', 'barangs.NAMA_BARANG')
            ->get();

        return response()->json([
            'dijuals' => $dijuals
        ]);
    }

    public function saveJual(Request $request)
    {
        $validated = $request->validate([
            'noFaktur' => 'required|string|max:6',
            'inputCustomer' => 'required|string|max:4',
            'inputJenis' => 'required|string|max:1',
            'inputTanggal' => 'required|date',
            'totalBruto' => 'required|numeric',
            'totalDiskon' => 'required|numeric',
            'totalJumlah' => 'required|numeric'
        ]);

        $jual = new Jual();
        $jual->NO_FAKTUR = $validated['noFaktur'];
        $jual->Kode_Customer = $validated['inputCustomer'];
        $jual->KODE_TJEN = $validated['inputJenis'];
        $jual->TGL_FAKTUR = $validated['inputTanggal'];
        $jual->TOTAL_BRUTO = $validated['totalBruto'];
        $jual->TOTAL_DISKON = $validated['totalDiskon'];
        $jual->TOTAL_JUMLAH = $validated['totalJumlah'];
        $jual->save();

        return response()->json(['success' => true, 'message' => 'Data saved successfully!']);
    }

    public function destroy(Request $request)
    {
        $noFaktur = $request->input('noFaktur');  // Get the noFaktur from the request
        $dijual = Jual::where('NO_FAKTUR', $noFaktur)->first(); // Find the record

        if ($dijual) {
            $dijual->delete();  // Delete the record
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Record not found']);
    }
}
