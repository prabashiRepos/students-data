@extends('layout.common_layout')

@section('content')

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Weight</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>
                        <h5>{{ $student->name }}</h5>
                    </td>
                    <td>
                        <h5>{{ $student->weight }}</h5>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>