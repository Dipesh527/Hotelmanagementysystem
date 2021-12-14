@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ url('chefs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Chef Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Chef Category</label>
                        <input type="text" class="form-control" name="category" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Chef Image</label>
                        <input type="file" class="form-contro" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection