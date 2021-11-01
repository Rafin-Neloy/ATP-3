<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function login(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'userpassword'=>'required'
        ]);
        return $req->input();
       
    }
    public function registration(Request $req)
    {
        $req->validate([
            'userfirstname'=>'required | max:10',
            'username'=>'required | max:10',
            'useremail'=>'required',
            'userpassword'=>'required | min:5',
            'reuserpassword'=>'required | min:5'

        ]);
        return $req->inpur();
    }
    public function Contact()
    {
        return("contact");
    }
}
