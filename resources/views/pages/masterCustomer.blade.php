@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between">
            <a class="btn btn-primary float-right" href="{{ url('/') }}">Kembali</a>
            <a class="btn btn-info" href="{{ url('/createCustomer') }}">{{ __('Tambahkan Customer') }}</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <table class="table">
                <tr>
                    <th>Nomor</th>
                    <th>Kode Customer</th>
                    <th>Nama Customer</th>
                    <th>Action</th>
                </tr>

                @if(! count($customers))
                    <tr>
                        <td colspan="3">Belum ada Customer</td>
                    </tr>
                @endif

                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $customer->Kode_Customer }}</td>
                        <td>{{ $customer->Nama_Customer }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ url('/editCustomer/' . $customer->Kode_Customer) }}">{{ __('Edit Customer') }}</a>
                            <a class="btn btn-danger" href="{{ url('/deleteCustomer/' . $customer->Kode_Customer) }}">{{ __('Delete Customer') }}</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection