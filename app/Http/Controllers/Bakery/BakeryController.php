<?php

namespace App\Http\Controllers\Bakery;

use App\Http\Controllers\Controller;
use App\Models\Bakery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class BakeryController extends Controller
{

    public function index()
    {
        return view('bakery.home.home');
    }

    public function login()
    {
        return view('bakery.login');
    }

    public function login_process(Request $request)
    {
        $bakery  = Bakery::where('email', $request->email)->first();
        if ($bakery) {
            if (password_verify($request->password, $bakery->password)) {

                if($bakery->activity == 1){
                    Session::put('bakery_id', $bakery->id);
                    Session::put('bakery_name', $bakery->name);

                    return redirect('/bakery/dashboard');
                 }
                 else{
                    return redirect('/bakery/login')->with('message', 'You are not activated yet!!');
                 }

            } else {
                return redirect('/bakery/login')->with('message', 'Wrong Password!!');
            }
        } else {
            return redirect('/bakery/login')->with('message', 'Invalid email!!');
        }
    }


    public function logout()
    {
        Session::forget('bakery_id');
        Session::forget('bakery_name');
        return redirect('/bakery/login')->with('message', 'You are successfully logout!!');

    }
}
