@extends('Admin.layout')
@section('content')
<br>
    <div class="container">
        <a href="{{ route('batch.create') }}">
           <button class="btn btn-success">Add new</button>
        </a>
       
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>SYLLABUS</th>
                        <th>DURATION</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
             @foreach ($batches as $batch )
             <tr>
                <td>{{ $batch->id }}</td>
                <td>{{ $batch->name }}</td>
                <td>{{ $batch->course_id }}</td>
                <td>{{ $batch->start_date }}</td>
                <td>
                    <a href="{{ url('batch',$batch->id) }}"><button class="btn btn-success"> Veiw</button></a>  
                    <a href="{{ route('batch.edit', $batch->id) }}" class="btn-primary"><button class="btn btn-success">Edit</button></a>
                    
                    <form action="{{ route('batch.destroy',$batch->id) }}" method="POST">
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
