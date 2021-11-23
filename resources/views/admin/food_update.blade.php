@extends('admin.home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('update_food', $food->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="name">Food name</label>
                        <input type="text" name="name" id="name" value="{{ $food->name }}" required>
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input type="text" name="name" id="price" value=" {{  $food->price }}" required>
                    </div>
                    <label for="image">Previous Image</label>
                    <img  height="120px" src="/food_image/{{ $food->image }}" alt="">
                    <div>
                        <label for="image">Food name</label>
                        <input type="file" name="image" id="image"  required>
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <input type="text" name="description" id="description" value="{{ $food->description }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection