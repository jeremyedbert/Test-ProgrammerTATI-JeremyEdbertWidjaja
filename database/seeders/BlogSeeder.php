<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Blog::create([
			'user_id' => 1,
			'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus suscipit sit, culpa ea nulla fugiat rerum vitae at ut quia, voluptas dolorum perspiciatis. Quas, quos iste delectus temporibus rem cumque?',
			'status' => 'Pending'
		]);
		Blog::create([
			'user_id' => 1,
			'content' => 'Hiya hiyaa Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam recusandae laboriosam nostrum accusamus iusto nisi aspernatur dolores dignissimos in architecto. Culpa quia doloribus at assumenda, modi neque eveniet perspiciatis officia nam? Nostrum explicabo nihil beatae ducimus, similique praesentium qui sequi itaque quia distinctio, perspiciatis enim, consectetur quisquam doloremque ex atque earum corrupti! Saepe a eaque aliquid dicta hic, nam omnis, natus temporibus enim tempore officia. Consequatur, rem tempore fuga totam eveniet tenetur voluptatum vel iure error nihil, soluta possimus omnis suscipit recusandae laudantium exercitationem nostrum atque maxime asperiores qui laborum voluptatibus. Possimus quam odit natus minus perferendis numquam, maxime aliquid!',
			'status' => 'Accepted'
		]);
		Blog::create([
			'user_id' => 2,
			'content' => 'Cek satu Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam recusandae laboriosam nostrum accusamus iusto nisi aspernatur dolores dignissimos in architecto. Culpa quia doloribus at assumenda, modi neque eveniet perspiciatis officia nam? Nostrum explicabo nihil beatae ducimus, similique praesentium qui sequi itaque quia distinctio, perspiciatis enim,',
			'status' => 'Pending'
		]);
		Blog::create([
			'user_id' => 3,
			'content' => 'Test log user_id 1',
			'status' => 'Pending'
		]);
	}
}
