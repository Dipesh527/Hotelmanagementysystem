@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ url('chefs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Chef Name</label>
                        <input type="text" name="name" required>
                    </div>
                    <div>
                        <label for="category">Chef Category</label>
                        <input type="text" name="category" required>
                    </div>
                    <div>
                        <label for="image">Chef Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection