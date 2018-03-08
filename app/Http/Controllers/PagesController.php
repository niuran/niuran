<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function root()
    {
		return view('pages.root');
    }
	
	public function info()
	{
		$user = User::where('id', 1)->first();
		return view('pages.info', compact('user'));
	}
}
