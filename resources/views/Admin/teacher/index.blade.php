@extends('Admin.layout')
@section('content')
<br>
    <div class="container">
        <a href="{{ route('teacher.create') }}">
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
             @foreach ($teacher as $item )
             <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->mobile }}</td>
                <td>
                    <a href="{{ url('teacher',$item->id) }}"><button class="btn btn-success"> Veiw</button></a>  
                    <a href="{{ route('teacher.edit', $item->id) }}" class="btn-primary"><button class="btn btn-success">Edit</button></a>
                    
                    <form action="{{ route('teacher.destroy',$item->id) }}" method="POST">
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
