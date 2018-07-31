<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AjaxController extends Controller
{
    public function checkDangKy($em)
    {
    	$user = User::where('email','=',$em)->count();
    	if($user > 0)
    	{
    		echo "<font color=red>Email này đã tồn tại</font>";
    	}
    	
    }
}
