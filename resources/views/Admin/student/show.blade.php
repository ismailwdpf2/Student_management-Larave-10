@extends('Admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">Students page</div>
        <div class="card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            <p class="card-text">{{ $student->address }}</p>
            <p class="card-text">{{ $student->mobile }}</p>
        </div>
    </div>
@endsection
