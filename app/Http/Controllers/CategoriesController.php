<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function index(){
        $showCategories = Category::paginate(5);
        return view('categories.index', ['showCategories' => $showCategories]);
    }

    public function add(){
        return view('categories.add');
    }
    public function storeCategory(StoreCategoryRequest $request){
        $user = Auth::user();
        $user->categories()->create($request->except('_token'));
        return redirect()->route('categories');
    }

    public function single($id)
    {
        $showCategory = Category::findOrFail($id);
        return view('categories.single', ['showCategory' => $showCategory]);
    }

    public function delete($id)
    {
        Category::destroy($id);
        return redirect()->route('categories');
    }
    
    public function edit($id)
    {
        $editCategory = Category::findOrFail($id);
        return view('categories.edit', ['editCategory' => $editCategory]);
    }

    public function update(StoreCategoryRequest $request, $id)
    {
        $update = Category::findOrFail($id);
        $update->name = $request->get('name');
        $update->description = $request->get('description');
        $update->save();
        return redirect()->route('editCategory',$id);

    }

}
