@extends('Admin.layout')
@section('content')

<div class="card py-3">
    <div class="card-header">teacher page</div>
    <div class="card-body">
       
        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf
            <input type="text" name="name" id="name" class="form-control" placeholder="teacher Name"> <br>
            <input type="text" name="address" id="address" class="form-control" placeholder="Address"><br>
            <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile"><br>
            <input type="submit" value="Save" class="btn btn-success">
        </form>
    </div>
</div>
@endsection