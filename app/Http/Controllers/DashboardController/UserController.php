<?php

namespace App\Http\Controllers\DashboardController;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index (){
      $users = User::all();
    return view('dashboard.users.index',[
    'users' => $users,
    ]);
  }
}
