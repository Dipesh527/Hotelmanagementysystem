@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('foods') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Food name</label>
                        <input type="text" name="name" id="name" placeholder="name" required>
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="text" name="name" id="price" placeholder="price" required>
                    </div>
                    <div>
                        <label for="image">Food name</label>
                        <input type="file" name="image" id="image" placeholder="image" required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" placeholder="description" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection