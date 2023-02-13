<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Link;
use App\Models\Category_Movies;
use App\Models\Category;

use Validator, Str, Config, Image;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('dashboard.index');
    }
    public function all_movies()
    {
        $movies = Movie::orderBy('id','desc')->paginate(25);
        $p = Movie::orderBy('id','desc')->first();
        $cats = Category::orderBy('category','Asc')->pluck('category','id');
        $data = ['movies'=>$movies ,'p'=>$p,'cats'=>$cats] ;
        return view('dashboard.movie.all',$data);
    }
    
    public function get_movie_see($id)
    {   
        $movies = Movie::orderBy('id','desc')->paginate(25);
        $p = Movie::findOrFail($id);
        $cats = Category::orderBy('category','Asc')->pluck('category','id');
        $data = ['p' => $p,'cats'=>$cats,'movies'=>$movies];
        return view('dashboard.movie.all', $data);
    }

    public function post_movie_add(Request $request)
    {
        $rules = [
            'title' => 'required'
        ];
        
        $messages = [
            'title.required' => 'Se requiere de un nombre para el producto'
         ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message','Ha ocurrido un error')->with('typealert','danger')->withInput();
        }else{
            //las carpetas donde el archivo va ir a parar
            $path = '/'.date('Y-m-d');//nombre del folder (2022-02-10)
            $file = trim($request->file('poster')->getClientOriginalExtension()); //toma el nombre del archivo
            $upload_path = Config::get('filesystems.disks.uploads.root');
            $name = Str::slug(str_replace($file,'',$request->file('poster')->getClientOriginalName()));
            
            $filename = rand(1,999).'.'.$name.'.'.$file;
            $file_file = $upload_path.'/'.$path.'/'.$filename;
            
            $movie = new Movie;
            $movie->year = $request->input('year');
            $movie->duration = $request->input('duration');
            $movie->title = e($request->input('title'));
            $movie->sinopsis = e($request->input('sinopsis'));
            $movie->calfication = $request->input('calfication');
            $movie->triler = e($request->input('triler'));
            $movie->file_path = date('Y-m-d'); 
            $movie->poster = $filename;
            
            
            if ($movie->save()) {
                if($request->hasFile('poster')){
                    $fl = $request->poster->storeAs($path, $filename, 'uploads');
                    $img = Image::make($file_file);
                    $img->resize(256,256,function($constraint){
                        $constraint->upsize();
                    });
                    $img->save($upload_path.'/'.$path.'/t_'.$filename); 
                }
                return redirect('/admin/movies')->with('message','Este producto se ha guardado con exito')->with('typealert','success');
            }
        }
    }

    public function post_link_movie_add($id,Request $request)
    {
        $rules = [
            'link' => 'required'
        ];
        
        $messages = [
            'link.required' => 'Se requiere de un link para el producto'
         ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message','Ha ocurrido un error')->with('typealert','danger')->withInput();
        }else{
            
            $link = new Link;
            $link->movie_id = $id;
            $link->link = e($request->input('link'));
            
            if ($link->save()) {
                return back()->with('message','Este producto se ha guardado con exito')->with('typealert','success');
            }
        }
    }

    public function post_category_movie_add($id,Request $request)
    {
        $rules = [
            'category' => 'required'
        ];
        
        $messages = [
            'category.required' => 'Se requiere de un categoria para el producto'
         ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message','Ha ocurrido un error')->with('typealert','danger')->withInput();
        }else{
            
            $category = new Category_Movies;
            $category->movie_id = $id;
            $category->category_id = $request->input('category');
            
            if ($category->save()) {
                return back()->with('message','Este producto se ha guardado con exito')->with('typealert','success');
            }
        }
    }

    public function apiMovies($page){
        $api = curl_init("https://api.themoviedb.org/3/search/movie?api_key=4893e4a751f59e2248b2776c1ac7eb78&query=".$page);
        curl_setopt($api,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($api);
        curl_close($api);
        $json =json_decode($response,true);
        // return $json;
        $data = ['json'=>$json];
        return view('dashboard.api.api', $data);
    }
}
