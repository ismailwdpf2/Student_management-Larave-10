@extends('Admin.layout')
@section('content')

<div class="card py-3">
    <div class="card-header">course page</div>
    <div class="card-body">
        <form action="{{ route('course.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $course->id }}" id="id">
            <input type="text" name="name" id="name" value="{{ $course->name }}" class="form-control" placeholder="Course Name"><br>

            <input type="text" name="syllabus" id="syllabus" value="{{ $course->syllabus }}" class="form-control" placeholder="syllabus"><br>

            <input type="text" name="duration" id="duration" value="{{ $course->duration }}" class="form-control" placeholder="duration"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection
