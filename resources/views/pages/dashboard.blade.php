@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row g-2">
            <div class="col-1">
                <a href="{{ url('/masterBarang') }}" class="btn btn-primary">Master Barang</a>
            </div>
            <div class="col-1">
                <a href="{{ url('/masterCustomer') }}" class="btn btn-primary">Master Customer</a>
            </div>
            {{-- <div class="col-10">
                <div class="text-white">-</div>
            </div> --}}
        </div>

            <div class="container py-3 my-2 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row g-1">
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnInput">Input</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px">Hapus</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px">Edit</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnSimpan" disabled>Simpan</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px">Cari</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnBatal" disabled>Batal</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px">Print</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px">Preview</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px">CSV</button>
                    </div>
                    <div class="col-5">
                        <div class="text-white"></div>
                    </div>
                </div>

                <form action="" method="">
                    <div class="row my-3 py-3 border-top border-secondary">
                        <div class="col-2">
                        <div class="px-3">NO FAKTUR</div>
                        </div>
                        :
                        <div class="col-4">
                            <input type="text" class="form-control" id="inputNomorFaktur" maxlength="6">
                        </div>
                        <div class="col-2">
                            <div class="px-3">TANGGAL</div>
                        </div>
                        :
                        <div class="col-3">
                            <input type="date" class="form-control" id="inputTanggal" disabled>
                        </div>
                    </div>
                </form>

                <div class="row">
                    <div class="col-2">
                        <div class="px-3" style="font-weight: bold">Kode Customer </div>
                    </div>
                    :
                    <div class="col-4">
                        <select class="form-control" id="inputCustomer" disabled>
                            {{-- <option selected></option>     --}}
                            @foreach ($customers as $customer)  
                            <option value="{{$customer->Kode_Customer}}">{{ $customer->Nama_Customer }}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="col-2">
                        <div class="px-2">JENIS TRANSAKSI</div>
                    </div>
                    :
                    <div class="col-3">
                        <select class="form-control" id="inputJenis" disabled>
                            @foreach ($jenis as $pilihan)
                                <option value="{{ $pilihan->KODE_TJEN }}">{{ $pilihan->NAMA_TJEN }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-11"></div>
                    <div class="col-1 align-self-end">
                        <button class="btn btn-light" id="detailButton" disabled>DETAIL</button>
                    </div>
                </div>
            </div>

            <div class="container py-3 my-3 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row g-1">
                    <div class="col">
                        <button class="btn btn-light" style="width: 77px" id="inputBawah" disabled>Input</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 77px" id="hapusBawah" disabled>Hapus</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 77px" id="simpanBawah" disabled>Simpan</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 77px" id="batalBawah" disabled>Batal</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 77px" id="headerBawah" disabled>Header</button>
                    </div>
                    <div class="col-8">
                        <div class="text-white"></div>
                    </div>
                </div>

                <div class="row my-3 pt-3 border-top border-secondary">
                    <div class="col-2">
                        <div class="px-1">Kode Barang</div>
                    </div>
                    <div class="col-2">
                        <div class="px-1">Nama Barang</div>
                    </div>
                    <div class="col">
                        <div class="px-1">Harga Barang</div>
                    </div>
                    <div class="col-1">
                        <div class="px-1">QTY</div>
                    </div>
                    <div class="col-1">
                        <div class="px-1">Diskon <span style="font-weight: bold">%</span></div>
                    </div>
                    <div class="col">
                        <div class="px-1">Bruto</div>
                    </div>
                    <div class="col">
                        <div class="px-1">Jumlah</div>
                    </div>
                </div>
                
                <form action="" method="">
                <div class="row">
                        <div class="col-2">
                            {{-- <input type="text" class="form-control" id="kode_barang" maxlength="10"> --}}
                            <select class="form-control" id="kode_barang" disabled>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->KODE_BARANG }}">{{ $barang->NAMA_BARANG }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control" id="nama_barang" disabled>
                        </div>
                        <div class="col">
                            <input type="number" placeholder="Rp 0" class="form-control" style="text-align: right" id="harga_barang" disabled>
                        </div>
                        <div class="col-1">
                            <input type="number" class="form-control" id="qty">
                        </div>
                        <div class="col-1">
                            <input type="number" class="form-control" id="diskon">
                        </div>
                        <div class="col">
                            <input type="number" placeholder="Rp 0" class="form-control" style="text-align: right" id="bruto" disabled>
                        </div>
                        <div class="col">
                            <input type="number" placeholder="Rp 0" class="form-control" style="text-align: right" id="jumlah" disabled>
                        </div>
                    </div>
                </form>
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

<script>
    document.getElementById('btnInput').addEventListener('click', function() {
        document.getElementById('btnSimpan').disabled = false;
        document.getElementById('btnBatal').disabled = false;
        document.getElementById('inputTanggal').disabled = false;
        document.getElementById('inputCustomer').disabled = false;
        document.getElementById('inputJenis').disabled = false;
        document.getElementById('detailButton').disabled = false;
    });

    document.getElementById('btnBatal').addEventListener('click', function() {
        document.getElementById('btnSimpan').disabled = true;
        document.getElementById('btnBatal').disabled = true;
        document.getElementById('inputTanggal').disabled = true;
        document.getElementById('inputCustomer').disabled = true;
        document.getElementById('inputJenis').disabled = true;
        document.getElementById('detailButton').disabled = true;
    })

    document.getElementById('detailButton').addEventListener('click', function() {
        document.getElementById('kode_barang').disabled = false;
        document.getElementById('inputBawah').disabled = false;
    })
</script>
@endsection