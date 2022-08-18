<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Medicine;

use App\Models\Order;

class HomeController extends Controller
{
    public function redirect()
    {

        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $medicine = medicine::all();
                return view('user.home',compact('medicine'));
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else 
        {
        $medicine = medicine::all();

        return view ("user.home",compact("medicine"));
        }
    }
    public function order(Request $request)
    {
        $data =new order;
        $data->name=$request->name;
    }
}
