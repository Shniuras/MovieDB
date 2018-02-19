<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Http\Requests\StoreActorRequest;
use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function index(){
        $showActors = Actor::paginate(5);
        return view ('actors.index', ['show' => $showActors] );
    }

    public function add(){
        return view('actors.add');
    }

    public function store(StoreActorRequest $request){
        Actor::create($request->all());
        return redirect()->route('actors');

    }

    public function single(){
        return view('actors.single');
    }

}
