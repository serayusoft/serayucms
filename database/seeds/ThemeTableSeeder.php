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
	            'author' => 'serayusoft',
	            'author_url' => 'http://serayusoft.com',
	            'description' => 'Default Theme',
	            'image_preview' => 'preview.jpg',
                'status' => true,
            ]            
        ]);
    }
}
