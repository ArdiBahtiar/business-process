@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading h3 mb-3">Input Barang Baru</div>
                <div class="panel-body">

                    <form action="{{ url('/barang') }}" role="form" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="control-label">Kode Barang</label>
                            <input type="text" name="KODE_BARANG" class="form-control" maxlength="10" required>
                        </div>

                        <div class="form-group my-2">
                            <label for="control-label">Nama Barang</label>
                            <input type="text" name="NAMA_BARANG" class="form-control" maxlength="20" required>
                        </div>

                        <div class="form-group my-2">
                            <label for="control-label">Harga Barang</label>
                            <input type="number" name="HARGA_BARANG" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambahkan Barang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection