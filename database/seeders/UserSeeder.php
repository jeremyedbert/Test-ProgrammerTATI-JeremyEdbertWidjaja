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
					'role' => 'Kepala Dinas'
				]);
        User::create([
					'username' => 'dianerlita',
					'name' => 'Dian Erlita Febrina',
					'role' => 'Kepala Bidang I'
				]);
        User::create([
					'username' => 'nikolaus',
					'name' => 'Niko Laos',
					'role' => 'Staff I'
				]);
        User::create([
					'username' => 'jeremyedbert',
					'name' => 'Jeremy Edbert',
					'role' => 'Kepala Bidang II'
				]);
        User::create([
					'username' => 'jeremyedbert',
					'name' => 'Jeremy Edbert',
					'role' => 'Staff II'
				]);
    }
}
