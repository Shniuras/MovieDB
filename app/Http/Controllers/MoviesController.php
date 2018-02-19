<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MoviesController extends Controller
{
    public function index(){
        $showMovies = Movie::paginate(5);
        return view('movies.index',['showMovies' => $showMovies]);
    }

    public function single($id){
        $showSingle = Movie::findOrFail($id);
        return view('movies.single',['showSingle' => $showSingle]);
    }

    public function add(){
        return view('movies.add');
    }

    public function store(StoreMovieRequest $request){
        $user = Auth::user();
        $user->movies()->create($request->except('_token'));
        return redirect()->route('movies.index');
    }

}
