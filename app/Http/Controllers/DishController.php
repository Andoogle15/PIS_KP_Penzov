<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index(){
        $dish = Dish::all();
        return view('');
    }

    public function addToCart($id){
        $dish = Dish::findOrFail($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
        }   else{
            $cart[$id] = [
                'title' => $dish->title,
                'photo' => $dish->photo,
                'price' => $dish->price,
                'quantity' => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Added');
    }

    public function remove(Request $request){
        if($request->id){
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Удалено');
        }
    }
}
