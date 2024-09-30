@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading h3 mb-3">Input Customer Baru</div>
                <div class="panel-body">

                    <form action="{{ url('/customer') }}" role="form" method="POST">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="control-label">Kode Customer</label>
                            <input type="text" name="Kode_Customer" class="form-control" maxlength="4" required>
                        </div>

                        <div class="form-group my-2">
                            <label for="control-label">Nama Customer</label>
                            <input type="text" name="Nama_Customer" class="form-control" maxlength="40" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambahkan Customer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection