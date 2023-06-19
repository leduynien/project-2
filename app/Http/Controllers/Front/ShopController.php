<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Feedback;

class ShopController extends Controller
{
     public function show($id){
        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->feedback->toArray(), 'rating'));
        $countRating = count($product->feedback);
        if ($countRating !=0){
            $avgRating = $sumRating/$countRating;
        }

        return view('front.shop.show', compact('product', 'avgRating'));

     }

     public function postComment(Request $request){
        Feedback::create($request->all());

        return redirect()->back();
     }
}
