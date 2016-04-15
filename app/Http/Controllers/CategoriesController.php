<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoriesController extends Controller
{
    //
    public function store(CategoryRequest $request) {
    	$category=new Category($request->all());
    	//dd($category);
    	$category->save();
    	return redirect()->route('admin.categories.create');
    }
    
    public function create() {
    	return view('admin.categories.create');
    }
    public function index() {
    	$categories =Category::orderBy('id','DESC')->paginate(5);
    	return view('admin.categories.index')->with('categories',$categories);
    }
    public function destroy ($id) {
         $category=Category::find($id);
         $category->delete();
         return redirect()->route('admin.categories.index');
    }
    public function edit($id) {
       // dd($id);
        $category=Category::find($id);
        return view('admin.categories.edit')->with('category',$category);
    }
    public function update (Request $request, $id) {
        $category=Category::find($id);
        $category->name=$request->name;
        $category->save();
        return redirect()->route('admin.categories.index');
    }
}
