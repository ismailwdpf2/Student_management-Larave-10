@extends('Admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">batch page</div>
        <div class="card-body">
            <h5 class="card-title">{{ $batches->name }}</h5>
            <p class="card-text">{{ $batches->course->name }}</p>
            <p class="card-text">{{ $batches->start_date }}</p>
        </div>
    </div>
@endsection
