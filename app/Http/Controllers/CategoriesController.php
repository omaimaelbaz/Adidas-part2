<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories;


class CategoriesController extends Controller
{
    public function categoryView()
        {
            $category = new Categories();
            $data =$category->get();

            return view('category',compact('data'));
        }
    public function addformeCategory()
    {

        return view('addcategory');
    }
    public function insertCategory(Request $request)
{
    $request->validate([
        'name' => 'required'
    ]);

    $category = new Categories();

    $category->fill($request->all());
    $category->save();
    return redirect('category');
}
public function deleteCategory($id)
{
   $category= Categories::find($id);
    $category->delete();
    return redirect('category');
}
public function updatepage($id)
{
    $category= Categories::find($id);

    return view ('updatecategory',compact('category'));
}
public function updatecategory(Request $request)
{
    $request->validate(
        [
            'name'=> 'required'
        ]
    );
    $category = new Categories();
    $category->update($request->all());


}

}
