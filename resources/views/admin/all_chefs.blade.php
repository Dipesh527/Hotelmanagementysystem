@extends('admin.home')

@section('content')
    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chefs as $chef)
                <tr>
                    <td>{{ $chef->id }}</td>
                    <td>{{ $chef->name }}</td>
                    <td>{{ $chef->category }}</td>
                    <td><img height="120px" src="chefs_image/{{ $chef->image }}" alt=""></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection