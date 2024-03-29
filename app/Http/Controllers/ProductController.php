<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Validation\Rules\Unique;

class ProductController extends Controller
{
    public function ProductView()
    {
        $allproduct= Product::with('category')->paginate(2);;

        // $product = new Product();
        // $allproduct = $product->all();

        return view('product', compact('allproduct'));
    }
    public function addproductpage()
    {
        $category = new Categories();
        $data = $category->get();

        return view('addproduct',compact('data'));
    }
    public function insertproduct(Request $request)
    {
        $request->validate([
            'Img_path' => '',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'Quantity' => 'required',
        ]);


        $product = new Product();

            $img = $request->file('Img_path');
            $img_name = uniqid() . $img->getClientOriginalName();
            $img->move('upload/', $img_name);

        // Handle image upload

        $product->Img_path = $img_name;


        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $product->Quantity = $request->Quantity;

        $product->save();

        return redirect('product');
    }


    public function deleteproduct($id)
    {
        $product = new Product();
        $product->find($id)->delete();
        return redirect('product');

    }
    public function  updatepage($id)
    {
        $product = new Product();
       $data= $product->find($id);
       $category = new Categories();
       $category = $category->all();
    //    dd($data);
        return view('updatepage',compact('data','category'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'Img_path'=>'required',
        'name' => 'required ',
        'description' => 'required',
        'price' => 'required',
        'category_id' => 'required',
        'Quantity' => 'required',
    ]);

    $product = Product::findOrFail($id);
         // Handle image upload
         $img = $request->file('Img_path');
         $img_name = uniqid() . $img->getClientOriginalName();
         $img->move('upload/', $img_name);
         $product->Img_path = $img_name;
         $product->name = $request->name;
         $product->description = $request->description;
         $product->price = $request->price;
         $product->category_id = $request->category_id;
         $product->Quantity = $request->Quantity;


    $product->update();

    return redirect('/product');
}


public function search(Request $request)
{
    $searchQuery = $request->input('search');
    $priceRange = $request->input('price');
    $quantityRange = $request->input('quantity');

    $query = Product::query();

    if ($searchQuery) {
        $query->where('name', 'like', '%' . $searchQuery . '%')
              ->orWhere('description', 'like', '%' . $searchQuery . '%');
    }

    if ($priceRange) {
        [$minPrice, $maxPrice] = explode('-', $priceRange);
        $query->whereBetween('price', [$minPrice, $maxPrice]);
    }
    if ($quantityRange) {
        [$minQuantity, $maxQuantity] = explode('-', $quantityRange);
        $query->whereBetween('quantity', [$minQuantity, $maxQuantity]);
    }
    if (!$searchQuery && !$priceRange && !$quantityRange) {
        $searchQuery = '';
        $priceRange = '';
        $quantityRange = '';
    }

    $allproduct = $query->paginate(3);

    return view('product', compact('allproduct', 'searchQuery', 'priceRange', 'quantityRange'));
}


}



