@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Customer</div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="{{ url('editCustomer/' . $customer->Kode_Customer . '/submit') }}">
                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="form-group my-2">
                                <label for="control-label">Kode Customer</label>
                                <input type="text" name="Kode_Customer" class="form-control" value="{{ $customer->Kode_Customer }}">
                            </div>

                            <div class="form-group my-2">
                                <label for="control-label">Nama Customer</label>
                                <input type="text" name="Nama_Customer" class="form-control" value="{{ $customer->Nama_Customer }}">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update Customer</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection