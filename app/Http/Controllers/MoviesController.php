<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Category;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\StoreUserRequest;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

class MoviesController extends Controller
{
    public function index(){
        $showMovies = Movie::all();
        return view('movies.index',['showMovies' => $showMovies]);
    }

    public function single($id){
        $showSingle = Movie::findOrFail($id);
        $showCategory = $showSingle->category;
        $showActors = $showSingle->actors;
        $showImage = $showSingle->images;
        return view('movies.single',[
            'showSingle'    => $showSingle,
            'showCategory'  => $showCategory,
            'showActors'    => $showActors,
            'showImage'     => $showImage
            ]);
    }

    public function add(){
        $showCategories = Category::all();
        $showActors = Actor::all();
        return view('movies.add',['showCategories' => $showCategories, 'showActors' => $showActors]);
    }

    public function store(StoreMovieRequest $request){
        $user = Auth::user();
        $actor_movie = $user->movies()->create($request->except('_token'));
        $actor_movie->actors()->attach($request->actor_id);
        $actor_movie->images()->create(['filename' => basename($request->file('file')->storePublicly('public')), 'user_id' => $user->id]);
        return redirect()->route('movies');
    }

    public function storePicture(StoreUserRequest $request, $id)
    {
        $user = Auth::user();
        $movie = Movie::findOrFail($id);
        $movie->images()->create(['filename' => basename($request->file('file')->storePublicly('public')), 'user_id' => $user->id]);
        return redirect()->route('singleMovie',$id);
    }

    public function delete($id){
        $delete = Movie::findOrFail($id);
        $delete->actors()->sync([]);
        $delete->delete();
        return redirect()->route('movies');
    }

    public function edit($id){
        $editMovie = Movie::findOrFail($id);
        $showCategories = Category::all();
        $editCategories = $editMovie->category;
        $showActors = Actor::all();
        $editActors = $editMovie->actors;
        return view('movies.edit',['editMovie' => $editMovie, 'showCategories' => $showCategories, 'editCategory' => $editCategories, 'showActors' => $showActors,  'editActor' => $editActors]);
    }

    public function update(StoreMovieRequest $request, $id){
        $edit = Movie::findOrFail($id);
        $edit->name = $request->get('name');
        $edit->description = $request->get('description');
        $edit->rating = $request->get('rating');
        $edit->year = $request->get('year');
        $edit->category_id = $request->get('category_id');
        $actorId = $request->get('actor_id');
        $edit->actors()->sync($actorId);
        $edit->save();
        return redirect()->route('editMovie',$id);
    }



}
