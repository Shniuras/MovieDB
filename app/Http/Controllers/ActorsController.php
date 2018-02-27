<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests\StoreActorRequest;
use App\Http\Requests\StoreUserRequest;
use App\Image;
use App\Movie;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActorsController extends Controller
{
    public function index(){
        $showActors = Actor::all();
//        foreach($showActors as $sA){
//            $s = $sA->images->first()->filename;
//            dd($s);
//        }

        return view ('actors.index', ['showActors' => $showActors] );
    }

    public function add(){
        $showMovie = Movie::all();
        return view('actors.add',['showMovie' => $showMovie]);
    }

    public function store(StoreActorRequest $request){
//        Actor::create($request->all());
//        Image::create($request->file('file')->storePublicly('storage'));
        $user = Auth::user();
        $actor_movie = $user->actors()->create($request->except('_token'));
        $actor_movie->movies()->attach($request->movie_id);
        $actor_movie->images()->create(['filename' => basename($request->file('file')->storePublicly('public')), 'user_id' => $user->id]);
        return redirect()->route('actors');
    }

    public function storePicture(StoreUserRequest $request, $id)
    {
        $user = Auth::user();
        $actor = Actor::findOrFail($id);
        $actor->images()->create(['filename' => basename($request->file('file')->storePublicly('public')), 'user_id' => $user->id]);
        return redirect()->route('singleActor',$id);
    }

    public function single($id){
        $single = Actor::findOrFail($id);
        $showMovies = $single->movies;
        $showImage = $single->images;
        return view('actors.single',['single' => $single, 'showMovies' => $showMovies, 'showImages' => $showImage]);
    }

    public function delete($id){
        $delete = Actor::findOrFail($id);
        $delete->movies()->sync([]);
        $delete->delete();
        return redirect()->route('actors');
    }

    public function edit($id){
        $edit = Actor::findOrFail($id);
        $showMovies = Movie::all();
        $editMovie = $edit->movies;
        $editImage = $edit->images;
        return view('actors.edit', ['edit' => $edit, 'showMovies' => $showMovies, 'editMovie' => $editMovie, 'editImage' => $editImage]);
    }

    public function update(StoreActorRequest $request, $id){
        $edit = Actor::findOrFail($id);
        $edit->name = $request->get('name');;
        $edit->birthday = $request->get('birthday');
        $movieId = $request->get('movie_id');
        $edit->movies()->sync($movieId);
        $edit->save();

        return redirect()->route('actors');
    }

}
