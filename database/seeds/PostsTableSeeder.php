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
        DB::table('posts')->insert([
        	[
	            'post_author' => 1,
	            'post_content' => '<p>Lorem ipsum dolor sit amet, illum appetere ei cum, ut sit affert 
	            					mandamus expetendis. Semper qualisque ad sea, vel timeam elaboraret ex, 
	            					eu mutat choro sit. Duo ad eros animal legendos. Duo te illud mundi congue. 
	            					Reque fabellas phaedrum in vix.</p><p> Error graeci recteque at mei, ne vis iudico 
	            					alienum perfecto, everti bonorum eu has. Ne minim omnesque ius, usu essent 
	            					mediocritatem ad. Minimum argumentum ea mel, sensibus efficiantur sea te, 
	            					mei ei autem minim mundi. Ex vel dicam exerci voluptaria, 
	            					ei pri esse probo, his rebum tincidunt eu. 
	            					Possit denique appellantur ea ius, 
	            					quaeque nonumes duo in, noster legimus sea in. Ne vim similique omittantur persequeris.</p>',
	            'post_title' => "Lorem ipsum",
	            'post_name' => "lorem-ipsum",
	            'post_type' => "post",
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
