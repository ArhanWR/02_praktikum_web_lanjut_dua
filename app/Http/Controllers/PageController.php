<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

class PageController extends Controller
{
    public function index()
	{
		return 'Selamat Datang';
	}

	public function about()
	{
		return 'NIM : 2141720227 <br>Nama : Arhan Windu Rizki Putra Budianto';
	}

	public function articles($id)
	{
		return "Halaman Artikel dengan ID $id";
	}
}