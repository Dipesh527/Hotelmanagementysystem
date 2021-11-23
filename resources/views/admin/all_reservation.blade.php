@extends('admin.home')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped table-bordered table-sm">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Time</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->number}}</td>
                            <td>{{ $data->time }}</td>
                            <td>{{ $data->message }}</td>
                            <td>{{ $data->date }}</td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection