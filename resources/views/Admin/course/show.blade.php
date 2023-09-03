@extends('Admin.layout')
@section('content')
    <div class="card">
        <div class="card-header">Courses page</div>
        <div class="card-body">
            <h5 class="card-title">{{ $course->name }}</h5>
            <p class="card-text">{{ $course->syllabus }}</p>
            <p class="card-text">{{ $course->duration }}</p>
        </div>
    </div>
@endsection
