<?php

namespace App\Http\Controllers\provinsi;

use App\Http\Controllers\Controller;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		// dd(Provinsi::all());
		return view('provinsi.index', [
			'data' => Provinsi::all()
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('provinsi.add_province');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$rules = [
			'name' => 'required',
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric'
		];

		$validatedData = $request->validate($rules, [
			'name.required' => 'Kolom nama wajib diisi.',
			'latitude.required' => 'Kolom latitude wajib diisi.',
			'latitude.numeric' => 'Isi latitude dengan angka.',
			'longitude.required' => 'Kolom longitude wajib diisi.',
			'longitude.numeric' => 'Isi longitude dengan angka.',
		]);

		Provinsi::create($validatedData);

		// $province = new Provinsi();
		// $province->name = $request->name;
		// $province->latitude = $request->latitude;
		// $province->longitude = $request->longitude;

		// $storeProvince = $province->save();

		return redirect()->route('provinsi.index')->with('success', 'Data ' . $request->name . " berhasil ditambahkan");
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Provinsi $provinsi)
	{
		return view('provinsi.show_province', [
			'data' => $provinsi
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Provinsi $provinsi)
	{
		return view('provinsi.edit_province', [
			'data' => $provinsi
		]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Provinsi $provinsi)
	{
		$rules = [
			'name' => 'required',
			'latitude' => 'required|numeric',
			'longitude' => 'required|numeric'
		];

		$request->validate($rules, [
			'name.required' => 'Kolom nama wajib diisi.',
			'latitude.required' => 'Kolom latitude wajib diisi.',
			'latitude.numeric' => 'Isi latitude dengan angka.',
			'longitude.required' => 'Kolom longitude wajib diisi.',
			'longitude.numeric' => 'Isi longitude dengan angka.',
		]);

		Provinsi::where('id', $provinsi->id)->update([
			'name' => $request->name,
			'latitude' => $request->latitude,
			'longitude' => $request->longitude,
		]);
		return redirect()->route('provinsi.index')->with('success', 'Data ' . $provinsi->name . " berhasil diubah");
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Provinsi $provinsi)
	{
		Provinsi::destroy($provinsi->id);
		return redirect()->route('provinsi.index')->with('success', 'Provinsi ' . $provinsi->name . " berhasil dihapus");
	}
}
