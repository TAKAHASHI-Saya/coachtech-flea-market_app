<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Like;
use App\Models\Comment;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $activeTab = $request->query('tab', 'recommend');

        $products = Product::all();

        $myListProducts = collect();

        if($activeTab === 'mylist' && Auth::check()){
            $myListProducts = Product::whereHas('likes', function($query){
                $query->where('user_id', Auth::id());
            })->get();
        }

        return view('product', compact('products', 'myListProducts', 'activeTab'));
    }

    public function show($item_id)
    {
        $product = Product::with(['comments.user', 'categories', 'condition'])
        ->withCount(['likes', 'comments'])
        ->findOrFail($item_id);

        $isLiked = Like::where('user_id', Auth::id())
        ->where('product_id', $item_id)
        ->exists();

        return view('detail', compact('product', 'isLiked'));
    }
}
