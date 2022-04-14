<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function getList(){
        $data = User::orderBy('id','asc')->paginate(20);

        return view('users',['data'=>$data]);
    }
}
