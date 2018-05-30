<?php

namespace Django\Http\Controllers;

use Django\User;
use Django\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Redirect;
use DB; 
use Session;

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
    public function showProfile()
    {    
         return view('signup');
    }
    // public function loginform()
    // {    
    //      return view('login');
    // }
    // public function insert(Request $request){
    //     if ($request->isMethod('post')) {
    //         $user = new User();
    //         $user->name ='Rajan';
    //         $user->email = $request->input('email');
    //         $user->password =$request->input('password');
    //         $user->created_at = date("Y-m-d H:i:s");
    //         $user->updated_at = date("Y-m-d H:i:s");
    //         try {

    //             $user->save();
    //             return redirect()->back()->with('message', 'Registered Successfully!');

    //         }catch (\Illuminate\Database\QueryException $e){

    //             return redirect()->back()->with('message', 'Error: This email address already registered!');

    //         }
         

    //     }

    // }
    // public function login(Request $request){

    //        if ($request->isMethod('post')) {

    //            $email = $request->input('email');
    //            $password = $request->input('password');            
    //            $user = DB::table('users')->where([
    //                     ['email', '=', $email],
    //                     ['password', '=', $password],])->first();
    //            if($user){                   
    //                 session(['id' => $user->id,'name' => $user->name,'email' => $user->email,]);
    //                  return view('welcome');
    //            }else{
    //             return redirect()->back()->with('message', 'Error: Incorrect Email/Password');
    //            }

    //       } 

    // }
    public function logout(){

           Session::forget('id');
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
