@extends('Admin.layout')
@section('content')
<br>
    <div class="container">
        <a href="{{ route('student.create') }}">
           <button class="btn btn-success">Add new</button>
        </a>
      
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
             @foreach ($student as $item )
             <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->mobile }}</td>
                <td>
                    <a href="{{ url('student',$item->id) }}"><button class="btn btn-success"> Veiw</button></a>  
                    <a href="{{ route('student.edit', $item->id) }}" class="btn-primary"><button class="btn btn-success">Edit</button></a>
                    
                    <form action="{{ route('student.destroy',$item->id) }}" method="POST">
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
