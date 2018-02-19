<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests\StoreActorRequest;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActorsController extends Controller
{
    public function index(){
        $showActors = Actor::paginate(5);
        $showImages = Image::all();
        return view ('actors.index', ['showActors' => $showActors, 'showImages' => $showImages] );
    }

    public function add(){
        return view('actors.add');
    }

    public function store(StoreActorRequest $request){
//        Actor::create($request->all());
//        Image::create($request->file('file')->storePublicly('storage'));
        $user = Auth::user();
        $actor = $user->actors()->create($request->except('_token'));
//        $actor->images()->create(['filename' => $request->file('file')->storePublicly('public'), 'user_id' => $user->id]);
        return redirect()->route('actors');
    }

    public function single($id){
        $single = Actor::findOrFail($id);
        return view('actors.single',['single' => $single]);
    }

    public function delete($id){
        Actor::destroy($id);
        return redirect()->route('actors');
    }

    public function edit($id){
        $edit = Actor::findOrFail($id);
        return view('actors.edit', ['edit' => $edit]);
    }

    public function update(StoreActorRequest $request, $id){
        $edit = Actor::findOrFail($id);
        $edit->name = $request->get('name');;
        $edit->birthday = $request->get('birthday');
        $edit->save();

        return redirect()->route('actors');
    }

}
