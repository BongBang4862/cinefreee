<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class ContentController extends Controller
{
    public function home()
    {
        $movies = Movie::orderBy('id','desc')->paginate(25);
        $data = ['movies'=>$movies];
        return view('content.home',$data);
    }
    public function get_movie($id)
    {
        $m = Movie::findOrFail($id);
        $data = ['m' => $m];
        return view('content.movie', $data);;
    }
}
