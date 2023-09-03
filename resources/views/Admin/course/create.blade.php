@extends('Admin.layout')
@section('content')

<div class="card py-3">
    <div class="card-header">course page</div>
    <div class="card-body">
       
        <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" class="form-control" placeholder="course Name"> <br>

            <input type="text" name="syllabus" id="syllabus" class="form-control" placeholder="syllabus"><br>

            <input type="text" name="duration" id="duration" class="form-control" placeholder="duration"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection