<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash,Auth,Mail,Str;

class ConnectController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login()
    {
        return view('connect.login');
    }
    public function logout()
    {
        Auth::logout();
        return view('connect.login');
    }

    public function post_login(Request $request)
    {
        $rules = [
          
            'email'=>'required|email',
            'password'=>'required|min:8',

        ];
        $messages = [
            'email.required'=>'Su Email es Requerido',
            'email.email'=>'El formato de su correo electronico es invalido',
            'password.required'=>'Una contraseña es Requerido',
            'password.min'=>'Su Contraseña debe ser minimo de 8 caracteres'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->with('message','Ha ocurrido un error')->with('typealert','danger');
        }else{
            
            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')],true)) {
                if (Auth::user()->status == '100') {
                    return redirect('/logout');
                }else{
                    return redirect('/admin/dashboard');
                }
            }else{
                return back()->with('message','El correo o contraseña son invalidos')->with('typealert','danger');
            }
        }
    }
}


