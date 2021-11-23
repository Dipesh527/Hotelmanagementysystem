@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table table-striped table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ url('user_delete', $user->id) }}" class="btn btn-danger btn-sm">delete</a>
                        </td>
                    </tr>
                    @endforeach
                 
                </tbody>
            </table>
        </div>
    </div>
@endsection