<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chef;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class HomeController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        $chefs = Chef::all();
        return view('frontend.home',compact('foods','chefs'));
    }
    public function home()
    {
        if(Auth::id())
        {
            $foods= Food::all();
            $chefs= Chef::all();
            if(Auth::user()-> usertype == '0')
            {
                $user_id = Auth::id();
                $count = Cart::where('user_id',$user_id)->count();
                return view('frontend.home',compact('foods','chefs','count'));
            }
            else
            {
                return view('admin.home');
            }
        
        }
        else
        {
            
            return view('frontend.home',compact('foods','chefs'));
        }
    }
    public function addcart(Request  $request ,$id)
    {
        if(Auth::id())
        {
            $user_id = Auth::id();
            $food_id = $id ; 
            $carts = new Cart();
            $carts-> user_id = $user_id ;
            $carts-> food_id = $food_id ;
            $carts-> quantity = $request->quantity ;
            $carts->save();
            return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
    public function showcart($id)
    {
        $count = Cart::where('user_id',$id)->count();
        $data2 = Cart::select('*')->where('user_id','=',$id)->get();
        $data =Cart::where('user_id',$id)->join('food','carts.food_id','=','food.id')->get();
        return view('frontend.showcart',compact('count','data','data2'));
    }
    public function remove($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function orders(Request $request)
    {
        foreach($request->foodname as $key=>$foodname)
        {

        }
        $data = new Order();
        $data->foodname= $foodname;
        $data-> price = $request-> price[$key];
        $data-> quantity = $request-> quantity[$key];
        $data->name = $request->name;
        $data->number = $request->number;
        $data->address = $request->address;
        $data->save();
        return redirect()->back();

    }
    public function all_orders()
    {
        $orders = Order::all();
        return view('admin.all_orders',compact('orders'));
    }


}

