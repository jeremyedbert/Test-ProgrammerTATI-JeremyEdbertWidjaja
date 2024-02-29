<?php

namespace App\Http\Controllers\dailylog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		// dd(DB::table('blogs')
		// ->join('users', 'users.id', '=', 'blogs.user_id')
		// ->where('users.role', 'Kepala Bidang I')->orWhere('users.role', 'Kepala Bidang II')->orWhere('users.role', 'Kepala Dinas')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')->get());
		if (auth()->user()->role == 'Kepala Dinas') {
			return view('dailylog.logs', [
				'data' => DB::table('blogs')
					->join('users', 'users.id', '=', 'blogs.user_id')
					->where('users.role', 'Kepala Bidang I')->orWhere('users.role', 'Kepala Bidang II')->orWhere('users.role', 'Kepala Dinas')->orderBy('blogs.updated_at', 'desc')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')->get()
			]);
		} else if (auth()->user()->role == 'Kepala Bidang I') {
			return view('dailylog.logs', [
				'data' => DB::table('blogs')
					->join('users', 'users.id', '=', 'blogs.user_id')
					->where('users.role', 'Kepala Bidang I')->orWhere('users.role', 'Staff I')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')->get()
			]);
		} else if (auth()->user()->role == 'Kepala Bidang II') {
			return view('dailylog.logs', [
				'data' => DB::table('blogs')
					->join('users', 'users.id', '=', 'blogs.user_id')
					->where('users.role', 'Kepala Bidang II')->orWhere('users.role', 'Staff II')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')->get()
			]);
		} else if (auth()->user()->role == 'Staff I') {
			return view('dailylog.logs', [
				'data' => DB::table('blogs')
					->join('users', 'users.id', '=', 'blogs.user_id')
					->where('users.role', 'Staff I')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')->get()
			]);
		} else if (auth()->user()->role == 'Staff II') {
			return view('dailylog.logs', [
				'data' => DB::table('blogs')
					->join('users', 'users.id', '=', 'blogs.user_id')
					->where('users.role', 'Staff II')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')->get()
			]);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('dailylog.add_log');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$rules = [
			'content' => 'required',
		];

		$request->validate($rules, [
			'content.required' => 'Kolom log wajib diisi.'
		]);

		$blog = new Blog();

		$blog->content = $request->input('content');
		if (auth()->user()->role == 'Kepala Dinas') {
			$blog->status = "Accepted";
		} else {
			$blog->status = "Pending";
		}

		$blog->user_id = auth()->user()->id;

		$blog->save();

		return redirect()->route('log.index')->with('success', 'Log berhasil ditambahkan');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(int $id)
	{
		return view('dailylog.show', [
			'data' => DB::table('blogs')
				->join('users', 'users.id', '=', 'blogs.user_id')->select('blogs.id', 'blogs.content', 'blogs.status', 'blogs.updated_at', 'users.role', 'users.name')
				->where('blogs.id', $id)->get()
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Blog $blog)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Blog $blog)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Blog $blog)
	{
		//
	}

	public function accept($blog)
	{
		Blog::where('id', $blog)->update([
			'status' => 'Accepted',
		]);
		return redirect()->route('log.index')->with('accepted', 'Log diterima');
	}

	public function reject($blog)
	{
		Blog::where('id', $blog)->update([
			'status' => 'Rejected',
		]);
		return redirect()->route('log.index')->with('rejected', 'Log ditolak');
	}
}
