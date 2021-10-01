<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Product_Controller extends Controller
{
    function index()
    {
        $data = Products::all();
        return view('productview', ['products'=>$data]);
    }

    function detail($id)
    {
        $data = Products::find($id);
        return view('detail', ['products'=>$data]);
    }

    function search(Request $req)
    {
        $data = Products::where('name', 'like', '%'.$req->input('query'). '%')->get();
        return view('search', ['products'=>$data]);
    }

    function AddToCArt(Request $req)
    {
        
        if ($req->session()->has('user')) 
        {
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->prod_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function cart_item()
    {
        $userID=Session::get('user')['id'];
        return Cart::where('user_id',$userID)->count();
    }

    function CartList()
    {
        $userID=Session::get('user')['id'];
        $data=DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('cart.user_id',$userID)
        ->get();
        return view('cartlist',['products'=>$data]);
    }

    function RemoveCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
