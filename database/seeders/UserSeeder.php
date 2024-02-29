<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		User::create([
			'username' => 'jeremyedbert',
			'name' => 'Jeremy Edbert',
			'role' => 'Kepala Dinas',
			'password' => bcrypt('jeremy')
		]);
		User::create([
			'username' => 'dianerlita',
			'name' => 'Dian Erlita Febrina',
			'role' => 'Kepala Bidang I',
			'password' => bcrypt('dianerlita')
		]);
		User::create([
			'username' => 'nikolaus',
			'name' => 'Niko Laos',
			'role' => 'Staff I',
			'password' => bcrypt('nikolaus')
		]);
		User::create([
			'username' => 'yosafat',
			'name' => 'Yosafat Pramudya',
			'role' => 'Kepala Bidang II',
			'password' => bcrypt('yosafat')
		]);
		User::create([
			'username' => 'estevina',
			'name' => 'Estevina Tumbilaka',
			'role' => 'Staff II',
			'password' => bcrypt('estevina')
		]);
	}
}
