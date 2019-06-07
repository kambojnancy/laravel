<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function insert(Request $req)
    {
		$name     = $req->input('name');
		$password = $req->input('password');
		$email    = $req->input('email');

		$data= array('name' => $name , 'password' => $password , 'email' => $email );
		DB:table('user')->insert($data);

    }
}
