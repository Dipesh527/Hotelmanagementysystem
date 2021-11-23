@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th> Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($foods as $food)
                            <tr>
                                <td>{{ $food->id }}</td>
                                <td>{{ $food->name }}</td>
                                <td>{{ $food->price }}</td>
                                <td><img height="120px" width="222px" src="food_image/{{ $food->image }}" alt=""></td>
                                <td>{{ $food->description }}</td>
                                <td>
                                    <a class="btn btn-danger btn-sm" href="{{ url('food_delete', $food->id) }}" >delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-secondary btn-sm" href="{{ url('food_update', $food->id) }}">update </a>
                                </td>

                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection