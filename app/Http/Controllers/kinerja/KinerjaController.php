<?php

namespace App\Http\Controllers\kinerja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KinerjaController extends Controller
{
	public function index()
	{
		return view('predikat_kinerja.index');
	}

	public function predikat_kinerja(Request $request)
	{
		$hasil_kerja = $request->input('hasil_kerja');
		$perilaku = $request->input('perilaku');
		$output = "";

		if ($hasil_kerja == "0" || $perilaku == "0") {
			$output = "Pick the right parameter";
			return redirect()->route('kinerja')->with(['error' => $output]);
		}
		if ($hasil_kerja == "1") {
			if ($perilaku == "1") {
				$output = "Sangat Kurang";
			} else {
				$output = "Butuh Perbaikan";
			}
		} else if ($hasil_kerja == "2") {
			if ($perilaku == "1") {
				$output = "Kurang/Misconduct";
			} else {
				$output = "Baik";
			}
		} else {
			if ($perilaku == "1") {
				$output = "Kurang/Misconduct";
			} else if ($perilaku == "2") {
				$output = "Baik";
			} else {
				$output = "Sangat Baik";
			}
		}
		// dd($output);
		return redirect()->route('kinerja')->with(['success' => $output]);
	}
}
