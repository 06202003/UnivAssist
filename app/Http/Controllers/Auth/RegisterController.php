<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/dashboard';

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
        return Validator::make($data, [
            'nama' => 'required|max:255',
            'email' => 'required|max:255',
            'NIK' => 'required|max:255',
            'alamat'=> 'required|max:255',
            'negara'=> 'required|max:255',
            'provinsi'=> 'required|max:255',
            'kota'=> 'required|max:255',
            'telepon'=> 'required|max:255',
            'NRP'=> 'required|max:255',
            'Universitas'=> 'required|max:255',
            'password'=>'required|confirmed',
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
        return User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'NIK' => $data['NIK'],
            'role'=> 'user',
            'alamat'=> $data['alamat'],
            'negara'=> $data['negara'],
            'provinsi'=> $data['provinsi'],
            'kota'=> $data['kota'],
            'telepon'=> $data['telepon'],
            'NRP'=> $data['NRP'],
            'Universitas'=> $data['Universitas'],
        ]);
    }
}
