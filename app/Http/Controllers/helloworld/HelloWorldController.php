<?php

namespace App\Http\Controllers\helloworld;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
	public function index()
	{
		return view('helloworld.index');
	}

	public function helloworld(Request $request)
	{
		$num = $request->input('num');
		$arr = array();
		for ($i = 1; $i <= $num; $i++) {
			if ($i % 4 == 0 && $i % 5 == 0) {
				array_push($arr, 'helloworld');
			} else if ($i % 4 == 0) {
				array_push($arr, 'helloworld');
			} else if ($i % 5 == 0) {
				array_push($arr, 'world');
			} else {
				array_push($arr, $i);
			}
		}
		// dd($arr);
		return redirect()->route('helloworld')->with('success', $arr);
	}
}
