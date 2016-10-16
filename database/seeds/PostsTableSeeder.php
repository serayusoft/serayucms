<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$faker = Faker\Factory::create();

        $categoryLimit = 4;
        $postLimit = 20;


        for($z = 0; $z < $categoryLimit; $z++){
        	$titleCategory = $faker->word();
            DB::table('terms')->insert(
            	[
	            'name' => $titleCategory,
	            'slug' => str_slug($titleCategory),
	            'taxonomy' => "category",
            	]
        	);
        }

        for ($i = 0; $i < $postLimit; $i++) {
        	$title = $faker->sentence();
            $idPost = DB::table('posts')->insertGetId(
            	[
	            'post_author' => 1,
	            'post_content' => $faker->paragraph(150),
	            'post_title' => $title,
	            'post_name' => str_slug($title),
	            'post_type' => "post",
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            	]
        	);

        	DB::table('term_relationships')->insert(
            	[
	            'object_id' => $idPost,
	            'term_taxonomy_id' => rand(1,4),
            	]
        	);
        	DB::table('post_meta')->insert(
            	[
            	'post_id' => $idPost,
	            'meta_key' => "featured_img",
	            'meta_value' => "uploads/sample-image-".rand(1,7).".jpg",
            	]
        	);
        }
    }
}
