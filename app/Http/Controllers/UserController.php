<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function UserDashboard(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('frontend.user_dashboard',compact('adminData'));
    }
}