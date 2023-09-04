@extends('Admin.layout')
@section('content')

<div class="card py-3">
    <div class="card-header">batch page</div>
    <div class="card-body">
       
        <form action="{{ route('batch.store') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" class="form-control" placeholder="batch Name"> <br>

            <input type="number" name="course_id" id="course_id" class="form-control" placeholder="course_id"><br>

            <input type="date" name="start_date" id="start_date" class="form-control" placeholder="start_date"><br>

            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection