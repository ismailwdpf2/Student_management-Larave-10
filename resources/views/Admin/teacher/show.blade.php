@extends('Admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">teachers page</div>
        <div class="card-body">
            <h5 class="card-title">{{ $teacher->name }}</h5>
            <p class="card-text">{{ $teacher->address }}</p>
            <p class="card-text">{{ $teacher->mobile }}</p>
        </div>
    </div>
@endsection
