<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\MultiImage;
use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    public function AllProduct(){

        $products = Product::latest()->get();
        return view('backend.product.product_all',compact('products'));

    }//end method

    public function AddProduct(){

        return view('backend.product.product_add');

    } // End Method 
}
