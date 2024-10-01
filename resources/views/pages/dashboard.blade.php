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

{{-- ini FORM pertama --}}

            <div class="container py-3 my-2 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row g-1">
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnInput">Input</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnHapus">Hapus</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnEdit">Edit</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnSimpan" disabled>Simpan</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnCari">Cari</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnBatal" disabled>Batal</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnPrint">Print</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnPreview">Preview</button>
                    </div>
                    <div class="col">
                        <button class="btn btn-light" style="width: 75px" id="btnCSV">CSV</button>
                    </div>
                    <div class="col-4">
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
                            <input type="text" class="form-control" id="noFaktur" name="noFaktur" maxlength="6" style="max-width: 70%">
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
                            <option selected></option>    
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
                        <select class="form-control" id="inputJenis" style="max-width: 50%" disabled>
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
                    <div class="col-7">
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
                
{{-- ini FORM kedua --}}

                <form action="" method="">
                <div class="row">
                        <div class="col-2">
                            <select class="form-control" id="kode_barang" disabled>
                                <option value=""></option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->KODE_BARANG }}"
                                        data-nama="{{ $barang->NAMA_BARANG }}"
                                        data-harga="{{ $barang->HARGA_BARANG }}">
                                        {{ $barang->KODE_BARANG }}
                                    </option>     
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

{{-- ini FORM ketiga --}}

            <div class="container pt-3 pb-5 my-3 rounded" style="background-color: rgb(189, 189, 189)">
                <div class="row mx-1 mb-1" style="background-color: white">
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
                        <div class="" style="font-weight: bold">DISKON %</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">BRUTO</div>
                    </div>
                    <div class="col">
                        <div class="" style="font-weight: bold">JUMLAH</div>
                    </div>
                </div>

                <div class="row" id="resultsContainer"></div>
            </div>

{{-- ini FORM total --}}

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
                            <input type="number" class="border border-primary rounded px-3" style="font-weight: bold; text-align:right" id="totalBruto" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="px-3">TOTAL DISKON</div>
                        </div>
                        <div class="col">
                            <input type="number" class="border border-primary rounded px-3" style="font-weight: bold; text-align:right" id="totalDiskon" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="px-3">TOTAL JUMLAH</div>
                        </div>
                        <div class="col">
                            <input type="number" class="border border-primary rounded px-3" style="font-weight: bold; text-align:right" id="totalJumlah" disabled>
                        </div>
                    </div>
                </div>
            </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
// Disabled buttons false and true
    document.getElementById('btnInput').addEventListener('click', function() {
        console.log('Input button clicked');
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
        document.getElementById('simpanBawah').disabled = false;
        document.getElementById('batalBawah').disabled = false;
        document.getElementById('hapusBawah').disabled = false;
        document.getElementById('btnInput').disabled = true;
        document.getElementById('btnHapus').disabled = true;
        document.getElementById('btnEdit').disabled = true;
        document.getElementById('btnCari').disabled = true;
        document.getElementById('btnBatal').disabled = true;
    })


// Print Page
    document.getElementById('btnPrint').addEventListener('click', function () {
        window.print();
    });


// Autofill datas for Dijual table
    document.getElementById('kode_barang').addEventListener('change', function() {
        const kodeBarang = this.value;
        if (kodeBarang) {
            document.getElementById('inputBawah').disabled = false;
        }

        // Fetch data from the selected option
        const selectedOption = this.options[this.selectedIndex];
        const namaBarang = selectedOption.getAttribute('data-nama');
        const hargaBarang = selectedOption.getAttribute('data-harga');

        // Update the fields with fetched data
        document.getElementById('nama_barang').value = namaBarang;
        document.getElementById('harga_barang').value = hargaBarang;
    });

    // On clicking the Input button, calculate Bruto and Jumlah
    document.getElementById('inputBawah').addEventListener('click', function() {
        const qty = parseFloat(document.getElementById('qty').value) || 0;
        const diskon = parseFloat(document.getElementById('diskon').value) || 0;
        const hargaBarang = parseFloat(document.getElementById('harga_barang').value) || 0;

        // Calculate Bruto and Jumlah
        const bruto = qty * hargaBarang;
        const jumlah = bruto - (bruto * (diskon / 100));

        // Calculate Total Bruto, Diskon and Jumlah

        // Update the fields
        document.getElementById('bruto').value = bruto.toFixed(2);
        document.getElementById('jumlah').value = jumlah.toFixed(2);
    });


// Save datas into Dijual table
    document.getElementById('simpanBawah').addEventListener('click', function() {
        const noFaktur = document.getElementById('noFaktur').value;
        const kodeBarang = document.getElementById('kode_barang').value;
        const hargaBarang = parseFloat(document.getElementById('harga_barang').value) || 0;
        const qty = parseInt(document.getElementById('qty').value) || 0;
        const diskon = parseFloat(document.getElementById('diskon').value) || 0;
        const bruto = parseFloat(document.getElementById('bruto').value) || 0;
        const jumlah = parseFloat(document.getElementById('jumlah').value) || 0;

        $.ajax({
            url: "{{ route('save.dijual') }}",
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                noFaktur: noFaktur,
                kode_barang: kodeBarang,
                harga_barang: hargaBarang,
                qty: qty,
                diskon: diskon,
                bruto: bruto,
                jumlah: jumlah
            },
            success: function(response) {
                if (response.success) {
                    alert(response.message);
                    // Clear the form after successful save
                    // document.getElementById('noFaktur').value = '';
                    document.getElementById('kode_barang').value = '';
                    document.getElementById('harga_barang').value = '';
                    document.getElementById('qty').value = '';
                    document.getElementById('diskon').value = '';
                    document.getElementById('bruto').value = '';
                    document.getElementById('jumlah').value = '';
                } else {
                    alert('Failed to save data!');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error occurred while saving data!');
            }
        });

        $.ajax({
                url: "{{ route('cari.autofill') }}",
                method: "POST",
                data: {
                    noFaktur: noFaktur,
                    _token: "{{ csrf_token() }}"
                },
                success: function (response) {
                    $('#resultsContainer').empty();

                    if (response.dijuals && response.dijuals.length > 0) {
                        $.each(response.dijuals, function (index, dijual) {
                            $('#resultsContainer').append(`
                                <div class="row align-items-center" data-no-faktur="${dijual.NO_FAKTUR}" data-kode-barang="${dijual.KODE_BARANG}" data-harga="${dijual.HARGA}" data-qty="${dijual.QTY}" data-diskon="${dijual.DISKON}" data-bruto="${dijual.BRUTO}" data-jumlah="${dijual.JUMLAH}" style="margin-left: 0.5px" data-id="${index + 1}">
                                    <input class="form-check-input item-checkbox" type="checkbox">
                                    <div class="col">
                                        <div class="px-3">${dijual.NO_FAKTUR}</div>
                                    </div>
                                    <div class="col">
                                        <div>${dijual.KODE_BARANG}</div>
                                    </div>
                                    <div class="col">
                                        <div>${dijual.NAMA_BARANG}</div>
                                    </div>
                                    <div class="col">
                                        <div>${dijual.HARGA}</div>
                                    </div>
                                    <div class="col">
                                        <div>${dijual.QTY}</div>
                                    </div>
                                    <div class="col">
                                        <div class="diskon-value">${parseFloat(dijual.DISKON)}</div>
                                    </div>
                                    <div class="col">
                                        <div class="bruto-value">${parseFloat(dijual.BRUTO)}</div>
                                    </div>
                                    <div class="col">
                                        <div class="jumlah-value">${parseFloat(dijual.JUMLAH)}</div>
                                    </div>
                                </div>
                            `);
                        });
                        calculateTotals();
                    } else {
                        $('#resultsContainer').append('<div>No data found</div>');
                    }
                },
                error: function (error) {
                    console.log(error);
                    alert('Error fetching data. Please try again.');
                }
            });
    });


// Auto Query for btnCari
$(document).ready(function () {
    $('#btnCari, #btnPreview').on('click', function () {
        let noFaktur = $('#noFaktur').val();
        
        $.ajax({
            url: "{{ route('cari.dijual') }}",
            method: "POST",
            data: {
                noFaktur: noFaktur,
                _token: "{{ csrf_token() }}"
            },
            success: function (response) {
                $('#resultsContainer').empty();

                // Autofill the Jual data (Kode_Customer, TANGGAL, KODE_TJEN, totalBruto, totalDiskon, totalJumlah)
                if (response.jual) {
                    $('#inputCustomer').val(response.jual.Kode_Customer);   // Autofill Kode_Customer
                    $('#inputTanggal').val(response.jual.TGL_FAKTUR);            // Autofill TANGGAL
                    $('#inputJenis').val(response.jual.KODE_TJEN);           // Autofill KODE_TJEN
                    $('#totalBruto').val(response.jual.TOTAL_BRUTO);         // Autofill totalBruto
                    $('#totalDiskon').val(response.jual.TOTAL_DISKON);       // Autofill totalDiskon
                    $('#totalJumlah').val(response.jual.TOTAL_JUMLAH);       // Autofill totalJumlah
                }

                // Fill Dijual data in the resultsContainer as before
                if (response.dijuals && response.dijuals.length > 0) {
                    $.each(response.dijuals, function (index, dijual) {
                        $('#resultsContainer').append(`
                            <div class="row align-items-center" style="margin-left: 0.5px">
                                <input class="form-check-input item-checkbox" type="checkbox">
                                <div class="col">
                                    <div class="px-3">${dijual.NO_FAKTUR}</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.KODE_BARANG}</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.NAMA_BARANG}</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.HARGA}</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.QTY}</div>
                                </div>
                                <div class="col">
                                    <div class="diskon-value">${parseFloat(dijual.DISKON)}</div>
                                </div>
                                <div class="col">
                                    <div class="bruto-value">${parseFloat(dijual.BRUTO)}</div>
                                </div>
                                <div class="col">
                                    <div class="jumlah-value">${parseFloat(dijual.JUMLAH)}</div>
                                </div>
                            </div>
                        `);
                    });
                    calculateTotals();
                } else {
                    $('#resultsContainer').append('<div>No data found</div>');
                }
            },
            error: function (error) {
                console.log(error);
                alert('Error fetching data. Please try again.');
            }
        });
    });
});

    function calculateTotals()
    {
        let totalBruto = 0;
        let totalJumlah = 0;

        $('#resultsContainer .row').each(function () {
            let bruto = parseFloat($(this).find('.bruto-value').text()) || 0;
            let jumlah = parseFloat($(this).find('.jumlah-value').text()) || 0;

            totalBruto += bruto;
            totalJumlah += jumlah;
        });

        let totalDiskon = totalBruto - totalJumlah;

        $('#totalBruto').val(totalBruto.toFixed(2));
        $('#totalDiskon').val(totalDiskon.toFixed(2));
        $('#totalJumlah').val(totalJumlah.toFixed(2));
    }


// btnEdit kayak btnCari
$(document).ready(function () {
    $('#btnEdit').on('click', function () {
        document.getElementById('inputCustomer').disabled = false;
        document.getElementById('inputTanggal').disabled = false;
        document.getElementById('inputJenis').disabled = false;
        document.getElementById('detailButton').disabled = false;
        let noFaktur = $('#noFaktur').val();
        
        $.ajax({
            url: "{{ route('cari.dijual') }}",
            method: "POST",
            data: {
                noFaktur: noFaktur,
                _token: "{{ csrf_token() }}"
            },
            success: function (response) {
                $('#resultsContainer').empty();

                // Autofill the Jual data (Kode_Customer, TANGGAL, KODE_TJEN, totalBruto, totalDiskon, totalJumlah)
                if (response.jual) {
                    $('#inputCustomer').val(response.jual.Kode_Customer);   // Autofill Kode_Customer
                    $('#inputTanggal').val(response.jual.TGL_FAKTUR);            // Autofill TANGGAL
                    $('#inputJenis').val(response.jual.KODE_TJEN);           // Autofill KODE_TJEN
                    $('#totalBruto').val(response.jual.TOTAL_BRUTO);         // Autofill totalBruto
                    $('#totalDiskon').val(response.jual.TOTAL_DISKON);       // Autofill totalDiskon
                    $('#totalJumlah').val(response.jual.TOTAL_JUMLAH);       // Autofill totalJumlah
                }

                // Fill Dijual data in the resultsContainer as before
                if (response.dijuals && response.dijuals.length > 0) {
                    $.each(response.dijuals, function (index, dijual) {
                        $('#resultsContainer').append(`
                            <div class="row align-items-center" style="margin-left: 0.5px">
                                <input class="form-check-input item-checkbox" type="checkbox">
                                <div class="col">
                                    <div class="px-3">${dijual.NO_FAKTUR}</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.KODE_BARANG}</div>
                                </div>
                                <div class="col">
                                    <div>NAMA BARANG</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.HARGA}</div>
                                </div>
                                <div class="col">
                                    <div>${dijual.QTY}</div>
                                </div>
                                <div class="col">
                                    <div class="diskon-value">${parseFloat(dijual.DISKON)}</div>
                                </div>
                                <div class="col">
                                    <div class="bruto-value">${parseFloat(dijual.BRUTO)}</div>
                                </div>
                                <div class="col">
                                    <div class="jumlah-value">${parseFloat(dijual.JUMLAH)}</div>
                                </div>
                            </div>
                        `);
                    });
                    calculateTotals();
                } else {
                    $('#resultsContainer').append('<div>No data found</div>');
                }
            },
            error: function (error) {
                console.log(error);
                alert('Error fetching data. Please try again.');
            }
        });
    });
});    


// Delete data from Jual
    $(document).ready(function () {
    $('#btnHapus').on('click', function () {
        let noFaktur = $('#noFaktur').val();

        if (noFaktur) {
            if (confirm('Are you sure you want to delete this record?')) {
                $.ajax({
                    url: "{{ route('delete.jual') }}", // Update to the correct delete route
                    method: "POST",
                    data: {
                        noFaktur: noFaktur,
                        _token: "{{ csrf_token() }}" // Include CSRF token for security
                    },
                    success: function (response) {
                        if (response.success) {
                            alert('Record deleted successfully!');
                            $('#resultsContainer').empty(); // Optionally clear the UI or update it
                        } else {
                            alert(response.message || 'Error deleting the record.');
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        alert('Error deleting the record. Please try again.');
                    }
                });
            }
        } else {
            alert('Please enter a valid No Faktur.');
        }
    });
    });

    
// Save datas into Jual table 
    document.getElementById('btnSimpan').addEventListener('click', function() {
        const noFaktur = document.getElementById('noFaktur').value;
        const kodeCustomer = document.getElementById('inputCustomer').value;
        const kodeTJen = document.getElementById('inputJenis').value;
        const tanggal = document.getElementById('inputTanggal').value;
        const totalBruto = parseFloat(document.getElementById('totalBruto').value) || 0;
        const totalDiskon = parseFloat(document.getElementById('totalDiskon').value) || 0;
        const totalJumlah = parseFloat(document.getElementById('totalJumlah').value) || 0;

        $.ajax({
            url: "{{ route('save.jual') }}",
            method: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                noFaktur: noFaktur,
                inputCustomer: kodeCustomer,
                inputJenis: kodeTJen,
                inputTanggal: tanggal,
                totalBruto: totalBruto,
                totalDiskon: totalDiskon,
                totalJumlah: totalJumlah
            },
            success: function(response) 
            {
                if (response.success) 
                {
                    alert(response.message);
                    document.getElementById('noFaktur').value = '';
                    document.getElementById('inputCustomer').value = '';
                    document.getElementById('inputJenis').value = '';
                    document.getElementById('inputTanggal').value = '';
                    document.getElementById('totalBruto').value = '';
                    document.getElementById('totalDiskon').value = '';
                    document.getElementById('totalJumlah').value = '';
                }
                else
                {
                    alert('Failed to save data!');
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('An error has occurred while saving data!');
            }
        });
    });


// Delete record from checkbox
    $(document).on('click', '#hapusBawah', function () {
    let itemsToDelete = [];

    $('.item-checkbox:checked').each(function () {
        let row = $(this).closest('.item-row');

        let noFaktur = row.data('no-faktur');
        let kodeBarang = row.data('kode-barang');
        let harga = row.data('harga');
        let qty = row.data('qty');
        let diskon = row.data('diskon');
        let bruto = row.data('bruto');
        let jumlah = row.data('jumlah');

        itemsToDelete.push({
            noFaktur: noFaktur,
            kodeBarang: kodeBarang,
            harga: harga,
            qty: qty,
            diskon: diskon,
            bruto: bruto,
            jumlah: jumlah
        });
        row.remove();
    });

    if (itemsToDelete.length > 0) {
        $.ajax({
            url: "{{ route('delete.dijual') }}",
            method: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                items: itemsToDelete
            },
            success: function (response) {
                if (response.success) {
                    alert('Records deleted successfully!');
                } else {
                    alert('Failed to delete records.');
                }
            },
            error: function (error) {
                console.error(error);
                alert('An error occurred while deleting records.');
            }
        });
    } else {
        alert('No items selected.');
    }
});


// btnBatal reload
    $(document).ready(function () {
        $('#btnBatal').on('click', function () {
            location.reload();
        });
    });


// batalBawah refresh 2nd form
    $(document).ready(function () {
        $('#batalBawah').on('click', function () {
            document.getElementById('kode_barang').value = '';
            document.getElementById('nama_barang').value = '';
            document.getElementById('harga_barang').value = '';
            document.getElementById('qty').value = '';
            document.getElementById('diskon').value = '';
            document.getElementById('bruto').value = '';
            document.getElementById('jumlah').value = '';
        });
    });


// btnCSV export
$(document).ready(function () {
    $('#btnCSV').on('click', function () {
        let csvContent = "data:text/csv;charset=utf-8,";

        // Header row
        csvContent += "NO FAKTUR,KODE BARANG,NAMA BARANG,HARGA,QTY,DISKON %,BRUTO,JUMLAH\n";

        // Iterate through each row and extract data
        $('#resultsContainer .row').each(function () {
            let noFaktur = $(this).find('.col:eq(0) .px-3').text().trim();
            let kodeBarang = $(this).find('.col:eq(1)').text().trim();
            let namaBarang = $(this).find('.col:eq(2)').text().trim();
            let harga = $(this).find('.col:eq(3)').text().trim();
            let qty = $(this).find('.col:eq(4)').text().trim();
            let diskon = $(this).find('.col:eq(5)').text().trim();
            let bruto = $(this).find('.col:eq(6)').text().trim();
            let jumlah = $(this).find('.col:eq(7)').text().trim();

            // Append each row of data
            csvContent += `${noFaktur},${kodeBarang},${namaBarang},${harga},${qty},${diskon},${bruto},${jumlah}\n`;
        });

        // Add the totals row (ensure correct column alignment by including blank fields)
        let totalBruto = $('#totalBruto').val();
        let totalDiskon = $('#totalDiskon').val();
        let totalJumlah = $('#totalJumlah').val();
        csvContent += `,,TOTAL,,,,${totalBruto},${totalJumlah},${totalDiskon}\n`;

        // Encode the CSV content
        let encodedUri = encodeURI(csvContent);
        let link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "data.csv");

        // Append link to the body and click it
        document.body.appendChild(link);
        link.click();

        // Remove link from the DOM
        document.body.removeChild(link);
    });
});
</script>
@endsection