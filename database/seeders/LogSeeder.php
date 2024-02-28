<?php

namespace Database\Seeders;

use App\Models\Log;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Log::created([
			'user_id' => 1,
			'content' => 'Test log user_id 1',
			'status' => 'Pending'
		]);
		Log::created([
			'user_id' => 1,
			'content' => 'Test log user_id 1',
			'status' => 'Accepted'
		]);
		Log::created([
			'user_id' => 2,
			'content' => 'Test log user_id 1',
			'status' => 'Rejected'
		]);
		Log::created([
			'user_id' => 3,
			'content' => 'Test log user_id 1',
			'status' => 'Pending'
		]);
	}
}
