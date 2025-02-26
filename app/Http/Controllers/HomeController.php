<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
      
        if(auth::id())
        {

            if(auth::user()->usertype=='0')
            {
                return view('user.home');
            }
            else
            {
                return view('admin.home');
            }

        }
          else
          {
            return redirect()->back();
          }




    }

    public function index()
    {
        return view('user.home');
    }
}
