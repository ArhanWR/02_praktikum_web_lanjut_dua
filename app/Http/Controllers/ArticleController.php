<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ArticleController extends Controller
{
	public function articles($id)
	{
		return "Halaman Artikel dengan ID $id";
	}
}