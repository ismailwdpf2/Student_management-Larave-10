@extends('Admin.layout')
@section('content')
<br>
    <div class="container">
        <a href="{{ route('course.create') }}">
           <button class="btn btn-success">Add new</button>
        </a>
        @if (session()->has('message'))
        <div class="alert alert-seccecc">
            {{ session()->get('message') }}
        </div>
    @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>MOBILE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
             @foreach ($course as $course )
             <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->syllabus }}</td>
                <td>{{ $course->duration }}</td>
                <td>
                    <a href="{{ url('course',$course->id) }}"><button class="btn btn-success"> Veiw</button></a>  
                    <a href="{{ route('course.edit', $course->id) }}" class="btn-primary"><button class="btn btn-success">Edit</button></a>
                    
                    <form action="{{ route('course.destroy',$course->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <a href=""><button class="btn btn-danger"> Delete</button></a>
                    </form>
                </td>
             
            </tr>
             @endforeach
              
            </table>
        </div>
    </div>
@endsection
