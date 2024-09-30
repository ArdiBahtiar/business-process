<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Dijual;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function dashboard(Request $request)
    {
        $customers = Customer::all();
        $jenis = Jenis::all();
        $barangs = Barang::all();
        $dijuals = Dijual::all();
        // $dijuals = Dijual::where('NO_FAKTUR', $request->input('noFaktur'));
        return view('pages.dashboard', ['customers' => $customers, 'jenis' => $jenis, 'barangs' => $barangs, 'dijuals' => $dijuals]);
    }

    
// MASTER BARANG
    public function masterBarang()
    {
        $barangs = Barang::all();
        return view('pages.masterBarang', ['barangs' => $barangs]);
    }

    public function createBarang()
    {
        $barangs = Barang::all();
        return view('pages.createBarang', ['barangs' => $barangs]);
    }

    public function storeBarang(Request $request)
    {
        Barang::create($request->all());
        return redirect('/masterBarang');
    }

    public function editBarang(Barang $barang)
    {
        return view('pages.editBarang', compact('barang'));
    }

    public function updateBarang(Request $request, Barang $barang)
    {
        $barang->update($request->all());
        return redirect('/masterBarang');
    }

    public function deleteBarang(Barang $barang)
    {
        $barang->delete();
        return redirect('/masterBarang');
    }

// MASTER CUSTOMER
    public function masterCustomer()
    {
        $customers = Customer::all();
        return view('pages.masterCustomer', ['customers' => $customers]);
    }

    public function createCustomer()
    {
        $customers = Customer::all();
        return view('pages.createCustomer', ['customers' => $customers]);
    }

    public function storeCustomer(Request $request)
    {
        Customer::create($request->all());
        return redirect('/masterCustomer');
    }

    public function editCustomer(Customer $customer)
    {
        return view('pages.editCustomer', compact('customer'));
    }

    public function updateCustomer(Request $request, Customer $Customer)
    {
        $Customer->update($request->all());
        return redirect('/masterCustomer');
    }

    public function deleteCustomer(Customer $Customer)
    {
        $Customer->delete();
        return redirect('/masterCustomer');
    }


    public function deleteDijual(Request $request)
{
    // Validate the incoming request
    $validated = $request->validate([
        'items' => 'required|array',  // Expect an array of items
        'items.*.noFaktur' => 'required|string',
        'items.*.kodeBarang' => 'required|string',
        'items.*.harga' => 'required|numeric',
        'items.*.qty' => 'required|numeric',
        'items.*.diskon' => 'required|numeric',
        'items.*.bruto' => 'required|numeric',
        'items.*.jumlah' => 'required|numeric'
    ]);

    // Loop through the items and delete matching records
    foreach ($validated['items'] as $item) {
        DB::table('Dijuals')
            ->where('NO_FAKTUR', $item['noFaktur'])
            ->where('KODE_BARANG', $item['kodeBarang'])
            ->where('HARGA', $item['harga'])
            ->where('QTY', $item['qty'])
            ->where('DISKON', $item['diskon'])
            ->where('BRUTO', $item['bruto'])
            ->where('JUMLAH', $item['jumlah'])
            ->delete();
    }

    return response()->json(['success' => true, 'message' => 'Records deleted successfully']);
}
}
