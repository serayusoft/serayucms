<?php

use Illuminate\Database\Seeder;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('themes')->insert([
        	[
	            'name' => 'smallpine',
	            'version' => '1.0',
	            'author' => 'serayutheme',
	            'author_url' => 'http://serayutheme.com',
	            'description' => 'Default Theme',
	            'image_preview' => 'Screenshot.png',
                'status' => true,
            ]            
        ]);
    }
}
