@extends('admin.home')

@section('content')
    <div class="container">
        <h1>Customer Orders</h1>

        <form action="{{ url('search') }}" method="GET">
            @csrf
            <input type="text" name="search">
            <input value="Search" type="submit" class="btn btn-primary">
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Address</th>
                            <th>Food Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->name }}</td>
                            <td>{{ $order->number }}</td>
                            <td>{{ $order->address}}</td>
                            <td>{{ $order->foodname }}</td>
                            <td>{{ $order->price }}</td>
                            <td>{{ $order->quantity}}</td>
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection