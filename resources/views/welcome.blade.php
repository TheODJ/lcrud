<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @extends('layout.main')
        @section('content')

        <h2 class="py-3 px-2">Home Page</h2>

        @if(session('successMsg'))
            <div class="alert alert-success" role="alert">
                {{session('successMsg')}}
            </div>

        @endif
        <table class="table">
            <thead class="black white-text">
                <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                <th scope="row"> {{$student->id}} </th>
                <td> {{$student->first_name}} </td>
                <td> {{$student->last_name}} </td>
                <td> {{$student->email}} </td>
                <td> {{$student->department}} </td>
                <td> {{$student->phone_number}} </td>
                <td> 
                <a class="btn btn-raised btn-primary btn-sm" href="{{route('edit',$student->id)}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                ||
                <form id="delete-from-{{$student->id}}" action="{{route('delete', $student->id)}}" method="POST" style="display: none;">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                </form>
                <button onclick="if(confirm('Are you sure to delete this data?')){
                    event.preventDefault();
                    document.getElementById('delete-from-{{$student->id}}').submit();
                    }
                    else{
                        event.preventDefault();
                    }
                    " class="btn btn-raised btn-danger btn-sm">
                    
                    <i class="fa fa-trash" aria-hidden="true"></i>                    
                
                
                </a>
                
                </td>
                </tr>
                <tr>
            @endforeach 
            </tbody>
        </table>
        <div class="col-md-12 mx-auto">
            {{ $students->links() }}
        </div>
        @endsection
        
    </body>
</html>
