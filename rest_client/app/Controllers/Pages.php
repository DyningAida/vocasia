<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'home'
		];
		return view('pages/home', $data);
	}
	public function about()
	{
		$data = [
			'title' => 'halaman about'
		];
		return view('pages/about', $data);
	}
}
