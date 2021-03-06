@extends('frontend.templates.user')

@section('main')
    <div id="top" align="center" >
        <div class="container">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Food Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Food Name</th>
                        <th>description</th>
                    </tr>

                </thead>
                <tbody>
                    <form action="/orders" method="post">
                        @csrf
                                @foreach ($data as $data)
                                    <tr>
                                        <td>
                                            {{ $data->id }}</td>
                                        <td>
                                            <input type="text" name="foodname[]" value="{{  $data->name}}" hidden>
                                            
                                            {{ $data->name }}</td>
                                        <td>
                                            <input type="text" name="price[]" value="{{  $data->price}}" hidden>
                                            
                                            {{ $data->price }}</td>
                                        <td>
                                            <input type="text" name="quantity[]" value="{{  $data->quantity}}" hidden>
                                            
                                            {{ $data->quantity }}</td>
                                        <td> <img  src="food_image/{{ $data->image }}" height="50px" width="50px"  alt=""></td>
                                        <td>{{ $data->description }}</td>
                                        
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        <div>
                            <button type="button" class="btn btn-primary"  id="order"> Order Now</button>
                        </div>
                        <div>
                            <div class="container" id="appear" style="position: relative; display:none;">
                                <div class="row">
                                    <div class="col-md-4">
                                        
                                    </div>
                                    <div class="col-md-6">
                                        
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input class="form-control" type="text" name=" name" placeholder="Name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="number">Number</label>
                                                <input type="text" class="form-control" name="number" placeholder="Number" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" name=" address" placeholder="Address" required>
                                            </div>
                                            
                                            <button type="submit" class="btn btn-success">Order Conform</button>
                                            
                                </form
                                <button type="button" id="close" class="btn btn-danger"> close</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#order").click(
          function()
          {
              $("#appear").show();
          }  
        );
        $("#close").click(
            function()
            {
                $("#appear").hide();
            }  
          );

    </script>
@endsection