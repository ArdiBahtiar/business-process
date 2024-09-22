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
            <div class="col-10">
                <div class="text-white">-</div>
            </div>
        </div>

            <div class="container py-3 my-2" style="background-color: rgb(189, 189, 189)">
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

                <div class="row my-2 py-2 border-top border-secondary">
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
    </div>
@endsection