<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Food;
use App\Models\Order;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users',compact('users'));
    }
    public function user_delete($id)
    {
        $data = User::find($id);
        $data->delete();
        session()->flash('message','docter deleted successfully');
        return redirect()->back();
    }
    public function add_food()
    {
        return view('admin.food');
    }
    public function foods(Request $request)
    {
        $foods = new Food();
        $foods-> name = $request-> name ;
        $foods-> price = $request-> price ;
        $foods-> description = $request-> description ;
        $image = $request-> image ;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request-> image -> move('food_image' , $imagename);
        $foods-> image= $imagename;
        $foods->save();
        return redirect()->back();
    }
    public function all_food()
    {
        $foods = Food::all();
        return view('admin.all_food', compact('foods'));
    }
    public function food_delete($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->back();
    }
    public function food_update($id)
    {
        $food = Food::find($id);
        return view('admin.food_update', compact('food'));
    }
    public function update_food( Request $request, $id )
    {
        $foods = Food::find($id);
        $foods-> name = $request-> name ;
        $foods-> price = $request-> price ;
        $foods-> description = $request-> description ;
        $image = $request-> image ;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request-> image -> move('food_image' , $imagename);
        $foods-> image= $imagename;
        $foods->save();
        return redirect()->back();
    }
    public function make_reservation(Request $request)
    {
        $data = new Reservation();
        $data-> name = $request-> name ;
        $data-> email = $request-> email ;
        $data-> number = $request-> number ;
        $data-> time = $request-> time ;
        $data-> message = $request-> message ;
        $data-> date = $request-> date ;
        $data->save();
        return redirect()->back();
    }
    
    public function all_reservation()
    {
        $data = Reservation::all();
        return view('admin.all_reservation',compact('data'));
    }

    public function add_chef()
    {
        return view('admin.chefs');
    }
    public function chefs(Request $request)
    {
        $chefs = new Chef();
        $chefs-> name = $request-> name ;
        $chefs-> category = $request-> category ;
        $image = $request-> image ;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request-> image-> move('chefs_image',$imagename);
        $chefs-> image = $imagename ;
        $chefs->save();
        return redirect()->back();

    }
    public function all_chef()
    {
        $chefs = Chef::all();
        return view('admin.all_chefs',compact('chefs'));
    }
    public function search(Request $request)
    {
        $search = $request->search ;
        $orders = Order::where('name', 'Like', '%'.$search.'%')->get();
        return view('admin.all_orders',compact('orders'));
    }
}
