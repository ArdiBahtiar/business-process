@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between">
            <a class="btn btn-primary float-right" href="{{ url('/') }}">Kembali</a>
            <a class="btn btn-info" href="{{ url('/createBarang') }}">{{ __('Tambahkan Barang') }}</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <table class="table">
                <tr>
                    <th>Nomor</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                </tr>

                @if(! count($barangs))
                    <tr>
                        <td colspan="4">Belum ada barang</td>
                    </tr>
                @endif

                @foreach($barangs as $barang)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $barang->KODE_BARANG }}</td>
                        <td>{{ $barang->NAMA_BARANG }}</td>
                        <td>{{ $barang->HARGA_BARANG }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection