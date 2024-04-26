@extends('layout.common_layout')

@section('content')

<form action="{{ route('students.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Weight:</strong>
                <input type="text" name="weight" class="form-control" placeholder="weight">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-sm" style="float:left; margin:10px" aria-expanded="false">
                    Submit
                </button>
            </div>
        </div>
    </div>
    </div>

</form>
@endsection