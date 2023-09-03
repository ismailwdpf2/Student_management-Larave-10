@extends('Admin.layout')
@section('content')

<div class="card py-3">
    <div class="card-header">student page</div>
    <div class="card-body">
        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $student->id }}" id="id">
            <input type="text" name="name" id="name" value="{{ $student->name }}" class="form-control" placeholder="Student Name"><br>
            <input type="text" name="address" id="address" value="{{ $student->address }}" class="form-control" placeholder="Address"><br>
            <input type="text" name="mobile" id="mobile" value="{{ $student->mobile }}" class="form-control" placeholder="Mobile"><br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection
