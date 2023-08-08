<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function Index(){
        $products = Product::latest()->get();
        return view('admin/allproduct', compact('products'));
    }

    public function AddProduct(){
        $categories = Category::latest()->get();
        $subcategories = Subcategory::latest()->get();
        return view('admin/addproduct', compact('categories', 'subcategories'));
    }

    public function StoreProduct(Request $request){
        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
            'product_category_id' => 'required',
            'product_subcategory_id' => 'required',
            'product_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $image = $request->file('product_img');
        $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$image_name);
        $image_url = 'upload/' . $image_name;


        $category_id = $request->product_category_id;
        $subcategory_id = $request->product_subcategory_id;

        $category_name = Category::where('id', $category_id)->value('category_name');
        $subcategory_name = Subcategory::where('id', $subcategory_id)->value('subcategory_name');

        Product::insert([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'product_category_name' => $category_name,
            'product_subcategory_name' => $subcategory_name,
            'product_category_id' => $request->product_category_id,
            'product_subcategory_id' => $request->product_subcategory_id,
            'product_img' => $image_url,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name))
        ]);

        Category::where('id', $category_id)->increment('product_count', 1);
        Subcategory::where('id', $subcategory_id)->increment('product_count', 1);

        return redirect()->route('allproduct')->with('message', 'Product Added Successfully!');
    }

    public function EditProductImg($id){
        $productinfo = Product::findOrFail($id);
        return view('admin.editproductimg', compact('productinfo'));
    }

    public function UpdateProductImg(Request $request){
        $request->validate([
            'product_img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $id = $request->id;

        $image = $request->file('product_img');
        $image_name = hexdec(uniqid()).'.'. $image->getClientOriginalExtension();
        $request->product_img->move(public_path('upload'),$image_name);
        $image_url = 'upload/' . $image_name;

        $name_image_previous = public_path($request->name_image_previous);
        
        Product::findOrFail($id)->update([
            'product_img' => $image_url
        ]);

        if (File::exists($name_image_previous)) {
            File::delete($name_image_previous);
        }

        return redirect()->route('allproduct')->with('message', 'Product Image Updated Successfully!');
    }

    public function EditProduct($id){
        $productinfo = Product::findOrFail($id);
        return view('admin.editproduct', compact('productinfo'));
    }

    public function UpdateProduct(Request $request){
        $product_id = $request->id;

        $request->validate([
            'product_name' => 'required|unique:products',
            'price' => 'required',
            'quantity' => 'required',
            'product_short_des' => 'required',
            'product_long_des' => 'required',
        ]);

        Product::findOrFail($product_id)->update([
            'product_name' => $request->product_name,
            'product_short_des' => $request->product_short_des,
            'product_long_des' => $request->product_long_des,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'slug' => strtolower(str_replace(' ', '-', $request->product_name))
        ]);

        return redirect()->route('allproduct')->with('message', 'Product Updated Successfully!');
    }

    public function DeleteProduct($id){
        
        $name_image = Product::where('id', $id)->value('product_img');
        $name_image_previous = public_path($name_image);
        if (File::exists($name_image_previous)) {
            File::delete($name_image_previous);
        }

        $cat_id = Product::where('id', $id)->value('product_category_id');
        $subcat_id = Product::where('id', $id)->value('product_subcategory_id');

        Category::where('id', $cat_id)->decrement('product_count', 1);
        Subcategory::where('id', $subcat_id)->decrement('product_count', 1);
        
        Product::findOrFail($id)->delete();

        return redirect()->route('allproduct')->with('message', 'Product Delete Successfully!');
    }
    
}
