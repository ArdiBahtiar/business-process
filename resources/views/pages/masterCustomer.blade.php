@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary float-right" href="{{ url('/') }}">Kembali</a>

            <table class="table">
                <tr>
                    <th>Nomor</th>
                    <th>Kode Customer</th>
                    <th>Nama Customer</th>
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
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection