<?php

namespace App\Http\Controllers\Auth;

use App\Specialization;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Doctor;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

/* usati da RegistersUsers */
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/* end of usati da RegistersUsers */

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

    // use RegistersUsers;

     /* ----- RegisterUser Trait ------- */

     use RedirectsUsers;

     /**
      * Show the application registration form.
      *
      * @return \Illuminate\View\View
      */
     public function showRegistrationForm()
     {
        $type = Specialization::all();
        return view('auth.register', compact('type'));
         
     }
 
     /**
      * Handle a registration request for the application.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
      */
     public function register(Request $request)
     {
         $this->validator($request->all())->validate();
 
         event(new Registered($user = $this->create($request->all())));
 
         $this->guard()->login($user);
 
         if ($response = $this->registered($request, $user)) {
             return $response;
         }
 
         return $request->wantsJson()
                     ? new JsonResponse([], 201)
                     : redirect($this->redirectPath());
     }
 
     /**
      * Get the guard to be used during registration.
      *
      * @return \Illuminate\Contracts\Auth\StatefulGuard
      */
     protected function guard()
     {
         return Auth::guard();
     }
 
     /**
      * The user has been registered.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  mixed  $user
      * @return mixed
      */
     protected function registered(Request $request, $user)
     {
         //
     }
 
     /* ----- end of RegisterUser Trait ------- */

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "email" => "required|email|unique:doctors,email, ",
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'specialization' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\doctor
     */
    protected function create(array $data)
    {

        $doctor =  Doctor::create([
            'name' => $data['name'],
            'surname' => $data['name'],
            'address' => $data['address'],
            'city' => $data['city'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);

        $doctor->save();

        $doctor->specialization()->attach($data['specialization']);

        return $doctor;


    }

        /**
     * Show the application registration form.
     *
     * @return \Illuminate\View\View
     */
   
}
