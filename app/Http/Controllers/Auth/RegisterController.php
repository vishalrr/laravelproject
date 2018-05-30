<?php

namespace Django\Http\Controllers\Auth;

use Django\User;
use Django\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Image;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showProfile($id)
    {
        return view('welcome');
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'address' => 'required|string|max:1500',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Django\User
     */
    protected function create(array $data)
    {

        if($data['file']){

           $avatar = $data['file'];
           $image_name = time() . '-' . $avatar->getClientOriginalName();
           $img = Image::make($avatar->getRealPath());
           $destinationPath = public_path("/") . "uploads/avatars/";
            if($img->width() > 800)
            {
                $img->resize("800", null, function ($const){
                    $const->aspectRatio();
                });
            }
           $img->save($destinationPath.$image_name); 

        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address' => $data['address'],
            'gender' => $data['gender'],
            'image' => $image_name,
            'type' => User::DEFAULT_TYPE,
        ]);
    }

}
