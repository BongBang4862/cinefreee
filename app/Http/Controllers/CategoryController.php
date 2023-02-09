<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Validator, Str, Config, Image;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function getHome()
    {
            $cats = Category::orderBy('category','Asc')->get();
            $data = ['cats'=> $cats];
        return view('dashboard.category.home', $data);
    }

    public function postCategoryAdd(Request $request)
    {
        $rules = [
            'category' => 'required',
            'icono' => 'required',
        ];
        
        $messages = [
            'name.required' => 'Se requiere de un nombre para la categoria',
            'icon.required' => 'Se requiere de un icono para la categoria'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message','Ha ocurrido un error')->with('typealert','danger');
        }else{
            $category = new Category;
            $category->category = $request->input('category');
            $category->icono = e($request->input('icono'));
            if ($category->save()) {
                return  redirect('/admin/categories')->with('message','La categoria se ha Editado con exito')->with('typealert','success');
            }

        }
    }
    public function getCategoryEdit($id)
    {
       $cat = Category::find($id);
       $data = ['cat' => $cat];
       return view('admin.categories.edit', $data);
    }

    public function postCategoryEdit(Request $request, $id)
    {
        $rules = [
            'name' => 'required',
            'icon' => 'required',
        ];
        
        $messages = [
            'name.required' => 'Se requiere de un nombre para la categoria',
            'icon.required' => 'Se requiere de un icono para la categoria'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message','Ha ocurrido un error')->with('typealert','danger');
        }else{

            
            $category = Category::find($id);
            $category->module = $request->input('module');
            $category->name = e($request->input('name'));
            $category->slug = Str::slug($request->input('name'));
            
            if($request->hasFile('icon')){
                $actual_icon = $category->icono;
                $actual_file_path = $category->file_path;
                $path = '/'.date('Y-m-d');//nombre del folder (2022-02-10)
                $fileext = trim($request->file('icon')->getClientOriginalExtension()); //toma el nombre del archivo
                $upload_path = Config::get('filesystems.disks.uploads.root');
                $name = Str::slug(str_replace($fileext,'',$request->file('icon')->getClientOriginalName()));
                $filename = rand(1,999).'.'.$name.'.'.$fileext;
                $fl = $request->icon->storeAs($path, $filename, 'uploads');
                $category->icono =$filename;
                $category->file_path = date('Y-m-d');
                if(!is_null($actual_icon)){
                   unlink($upload_path.'/'.$actual_file_path.'/'.$actual_icon); 
                }
            }
            if ($category->save()) {
                return redirect()->route('categories', ['module' => $category->module])->with('message','La categoria se ha Editado con exito')->with('typealert','success');
            }

        }
    }
    public function getCategoryDelete($id)
    {
        $category = Category::find($id);
        if ($category->delete()) {
            return back()->with('message','La categoria se ha elimanado con exito')->with('typealert','success');
        }
    }
}