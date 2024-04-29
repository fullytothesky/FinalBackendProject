<?php


namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

//class NavigationController extends Controller
//{
//    public function welcomeScreen()
//    {
//        return view('opening');
//    }
//    public function categoriesView()
//    {
//        $categories=Category::all();
//      return view('categories' , ['categories'=>$categories]);
//    }
//    public function productsView($id)
//    {
//        $chosenProducts=Product::where('category_id',$id)->get();
//        return view('productslist', ['choosenID'=>$id, 'products'=>$chosenProducts]);
//    }
//    public function chosenProductView(){
//
//    }
//    public function authView(){
//      return view("authorization");
//    }
//
//    public function ordersView(){
//
//        return view("orders", ['user'=>auth()->user()]);
//    }
//}



class NavigationController extends Controller
{
    public function welcomeScreen()
    {
        return response()->json(['message' => 'Welcome to the opening page']);
    }

    public function categoriesView()
    {
        $categories = Category::all();
        return response()->json(['categories' => $categories]);
    }

    public function productsView($id)
    {
        $chosenProducts = Product::where('category_id', $id)->get();
        return response()->json(['choosenID' => $id, 'products' => $chosenProducts]);
    }

    public function chosenProductView()
    {
        
        return response()->json(['message' => 'Chosen product view']);
    }

    public function authView()
    {
        return response()->json(['message' => 'Authorization view']);
    }

    public function ordersView()
    {
        return response()->json(['user' => auth()->user()]);
    }
}

