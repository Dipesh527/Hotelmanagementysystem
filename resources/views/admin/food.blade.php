@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('foods') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Food name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="name" required>
                    </div>
                    <div>
                        <label for="price" class="form-group">Price</label>
                        <input type="text" name="name" class="form-control" id="price" placeholder="price" required>
                    </div>
                    <div>
                        <label for="image" class="form-group">Food name</label>
                        <input type="file" name="image" id="image" placeholder="image" required>
                    </div>
                    <div>
                        <label for="description" class="form-group">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="description" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection