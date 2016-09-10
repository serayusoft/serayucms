<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
        	[
	            'name' => 'site_title',
	            'value' => 'Serayucms',
            ],
            [
            	'name' => 'site_tagline',
	            'value' => 'Simple Content Management System',
            ],
            [
                'name' => 'email_administrator',
                'value' => 'admin@admin.com',
            ],
            [
                'name' => 'frontpage_blog',
                'value' => false,
            ],
            [
                'name' => 'view_post_index',
                'value' => '10',
            ],

            [
                'name' => 'image_thumbnail_width',
                'value' => '150',
            ],
            [
                'name' => 'image_thumbnail_height',
                'value' => '150',
            ],

            [
                'name' => 'image_medium_width',
                'value' => '300',
            ],
            [
                'name' => 'image_medium_height',
                'value' => '300',
            ],

            [
                'name' => 'image_large_width',
                'value' => '1024',
            ],
            [
                'name' => 'image_large_height',
                'value' => '800',
            ],

            [
            	'name' => 'menu_name',
	            'value' => serialize(['main-menu']),
            ],
        ]);
    }
}
