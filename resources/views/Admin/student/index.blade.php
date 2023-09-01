@extends('Admin.layout')
@section('content')
    <div class="container">
        <a href="">
            <h3>Add new</h3>
        </a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>MOBILE</th>
                    </tr>
                </thead>
             @foreach ($student as $item )
             <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->mobile }}</td>
             
            </tr>
             @endforeach
              
            </table>
        </div>
    </div>
@endsection
