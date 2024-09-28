<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Barang;
use App\Models\Jenis;
use App\Models\Dijual;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard(Request $request)
    {
        $customers = Customer::all();
        $jenis = Jenis::all();
        $barangs = Barang::all();
        // $dijuals = Dijual::all();
        $dijuals = Dijual::where('NO_FAKTUR', $request->input('noFaktur'));
        return view('pages.dashboard', ['customers' => $customers, 'jenis' => $jenis, 'barangs' => $barangs, 'dijuals' => $dijuals]);
    }

    /**
     * Display a listing of the resource.
     */
    public function masterBarang()
    {
        $barangs = Barang::all();
        return view('pages.masterBarang', ['barangs' => $barangs]);
    }

    public function masterCustomer()
    {
        $customers = Customer::all();
        return view('pages.masterCustomer', ['customers' => $customers]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
