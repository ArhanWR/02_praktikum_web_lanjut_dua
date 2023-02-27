<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AboutController extends Controller
{
	public function about()
	{
		return 'NIM : 2141720227 <br>Nama : Arhan Windu Rizki Putra Budianto';
	}
}