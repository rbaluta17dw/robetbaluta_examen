<?php

namespace App\Http\Controllers;
use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
	public function index()
	{
		$hoteles = Hotel::where('categoria', 1)->get();

		return view('hotel/index', [
			'hoteles' => $hoteles
		]);
	}

}
