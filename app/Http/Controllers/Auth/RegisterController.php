<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
/*             'domicilio' => ['required', 'string', 'max:255'],
            'nro' => ['required', 'string', 'max:255'],
            'dto' => ['nullable','string', 'max:255'],
            'piso' => ['required', 'string', 'max:255'],
            'localidad' => ['required', 'string', 'max:255'],
            'partido' => ['required', 'string', 'max:255'],
            'calle1' => ['required', 'string', 'max:255'],
            'calle2' => ['required', 'string', 'max:255'], */
            'tel1' => ['required', 'string', 'max:255'],
            'tel2' => ['required', 'string', 'max:255'],


            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     protected function create(array $data)
     {

       //dd($data);
       $nombreArchivo = '../../img\barbijo.png';
       //debemos tener en cuenta que si hay un archivo, lo subimos y le guardamos la ruta
       if(isset($data['foto'])){
         //al archivo que subi lo voy a guardar en el filesystem de laravel
         $rutaDelArchivo = $data['foto']->store('public');
         //le saco solo el nombre
         $nombreArchivo = basename($rutaDelArchivo);
       }
         return User::create([
             'name' => $data['name'],
             'lastname' => $data['lastname'],
             'email' => $data['email'],
/*              'domicilio' => $data['domicilio'],
             'nro' => $data['nro'],
             'dto' => $data['dto'],
             'piso' => $data['piso'],
             'localidad' => $data['localidad'],
             'partido' => $data['partido'],
             'calle1' => $data['calle1'],
             'calle2' => $data['calle2'], */
             'tel1' => $data['tel1'],
             'tel2' => $data['tel2'],

             'password' => Hash::make($data['password']),
             'foto' => $nombreArchivo,
         ]);

         $user->roles()->attach(Role::where('name', 'user')->first());
         return $user;
     }



}
