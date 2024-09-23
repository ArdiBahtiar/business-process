@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row g-2">
            <div class="col-1">
                <div class="btn btn-primary">Master Barang</div>
            </div>
            <div class="col-1">
                <div class="btn btn-primary">Master Customer</div>
            </div>
            {{-- <div class="col-10">
                <div class="text-white">-</div>
            </div> --}}
        </div>

            <div class="container py-3 my-2 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row g-1">
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Input</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Hapus</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Edit</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Simpan</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Cari</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Batal</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Print</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">Preview</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 75px">CSV</div>
                    </div>
                    <div class="col-5">
                        <div class="text-white"></div>
                    </div>
                </div>

                <div class="row my-3 py-3 border-top border-secondary">
                    <div class="col-2">
                        <div class="px-3">NO FAKTUR</div>
                    </div>
                    :
                    <div class="col-4">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-2">
                        <div class="px-3">TANGGAL</div>
                    </div>
                    :
                    <div class="col-3">
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-2">
                        <div class="px-3" style="font-weight: bold">Kode Customer </div>
                    </div>
                    :
                    <div class="col-4">
                        <select class="form-control">
                        <option selected>Coba-coba</option>    
                        <option value="coba">Coba</option>    
                        </select>
                    </div>
                    <div class="col-2">
                        <div class="px-2">JENIS TRANSAKSI</div>
                    </div>
                    :
                    <div class="col-3">
                        <select class="form-control">
                            <option value="TERIMA">TERIMA</option>
                            <option value="JUAL">JUAL</option>
                            <option value="RETUR">RETUR</option>
                        </select>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-11"></div>
                    <div class="col-1 align-self-end">
                        <div class="btn btn-light">DETAIL</div>
                    </div>
                </div>
            </div>

            <div class="container py-3 my-3 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row g-1">
                    <div class="col">
                        <div class="btn btn-light" style="width: 77px">Input</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 77px">Hapus</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 77px">Simpan</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 77px">Batal</div>
                    </div>
                    <div class="col">
                        <div class="btn btn-light" style="width: 77px">Header</div>
                    </div>
                    <div class="col-8">
                        <div class="text-white"></div>
                    </div>
                </div>

                <div class="row my-3 pt-3 border-top border-secondary">
                    <div class="col-2">
                        <div class="px-3">Kode Barang</div>
                    </div>
                    <div class="col">
                        <div class="">Nama Barang</div>
                    </div>
                    <div class="col">
                        <div class="">Harga Barang</div>
                    </div>
                    <div class="col">
                        <div class="">QTY</div>
                    </div>
                    <div class="col">
                        <div class="">Diskon <span style="font-weight: bold">%</span></div>
                    </div>
                    <div class="col">
                        <div class="">Bruto</div>
                    </div>
                    <div class="col">
                        <div class="">Jumlah</div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                         {{-- <input type="text" class="form-control" id="kode_barang" style="width: 185px"> --}}
                         <input type="text" class="form-control" id="kode_barang">
                    </div>
                    <div class="col">
                        {{-- <input type="text" class="form-control" id="nama_barang" style="width: 160px"> --}}
                        <input type="text" class="form-control" id="nama_barang">
                    </div>
                    <div class="col">
                        <input type="number" placeholder="Rp 0" class="form-control" id="harga_barang">
                    </div>
                    <div class="col">
                        {{-- <input type="number" class="form-control" id="qty" style="width: 80px"> --}}
                        <input type="number" class="form-control" id="qty">
                    </div>
                    <div class="col">
                        {{-- <input type="number" class="form-control" id="diskon" style="width: 80px"> --}}
                        <input type="number" class="form-control" id="diskon">
                    </div>
                    <div class="col">
                        <input type="number" placeholder="Rp 0" class="form-control" id="bruto">
                    </div>
                    <div class="col">
                        <input type="number" placeholder="Rp 0" class="form-control" id="jumlah">
                    </div>
                </div>
            </div>

            <div class="container pt-3 pb-5 my-3 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row mx-1" style="background-color: white">
                    <div class="col">
                        <div class="px-3" style="font-weight: bold">NO FAKTUR</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">KODE BARANG</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">NAMA BARANG</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">HARGA</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">QTY</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">DISKON</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">BRUTO</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">JUMLAH</div>
                    </div>
                </div>
            </div>

            {{-- <div class="container pt-3 pb-5 my-3 w-50 rounded d-inline-flex" style="background-color: rgb(189, 189, 189)"> --}}
            <div class="row my-3 rounded">
                <div class="col-6">
                    <div class=""></div>
                </div>
                <div class="col-6 p-3 h5" style="background-color: rgb(189, 189, 189)">        
                    <div class="row">
                        <div class="col">
                            <div class="px-3">TOTAL BRUTO</div>
                        </div>
                        <div class="col">
                            <div class="border border-primary rounded px-3" style="font-weight: bold; text-align:right">Rp 999,999.99</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="px-3">TOTAL DISKON</div>
                        </div>
                        <div class="col">
                            <div class="border border-primary rounded px-3" style="font-weight: bold; text-align:right">Rp 999,999.99</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="px-3">TOTAL JUMLAH</div>
                        </div>
                        <div class="col">
                            <div class="border border-primary rounded px-3" style="font-weight: bold; text-align:right">Rp 999,999.99</div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection