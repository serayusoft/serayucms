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
            	'name' => 'menu_name',
	            'value' => serialize(['main-menu']),
            ],
        ]);
    }
}
