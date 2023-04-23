<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    //protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * @OA\Post(
     * path="/login",
     * summary="Sign in",
     * description="Bejelentkezés email-el és jelszóval",
     * operationId="authLogin",
     * tags={"auth"},
     * @OA\RequestBody(
     *    required=true,
     *    description="A felhasználó hitelesítő adatainak átadása",
     *    @OA\JsonContent(
     *       required={"email","password"},
     *       @OA\Property(property="email", type="string", format="email", example="user1@mail.com"),
     *       @OA\Property(property="password", type="string", format="password", example="PassWord12345"),
     *    ),
     * ),
     * @OA\Response(
     *    response=422,
     *    description="Wrong credentials response",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
     *        )
     *     )
     * )
     */
    protected function authenticated()
    {
        if (Auth::user()->admin == '1') //1 = Admin Login
        {
            //return redirect('dashboard')->with('status','Welcome to your dashboard');
            return redirect('dashboard')->with('status', 'Üdv az ADMIN felületen!');
        } elseif (Auth::user()->admin == '0') // Normal or Default User Login
        {
            //return redirect('/')->with('status','Logged in successfully');
            return redirect('/')->with('status', 'Sikeres bejelentkezés!');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
