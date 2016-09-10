<?php

namespace App\Modules\ContentManager\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\ContentManager\Models\Options;
class OptionsController extends Controller
{
    public function index(){
    	$model = Options::all();
    	$res = [];
    	foreach ($model as $value) {
    		$res[$value->name] = $value->value;
    	}
    	return view("ContentManager::setting",['model'=>$res]);
    }

    public function update(){
    	$model = new Options();
        $this->validate($request, [
            'opt[site_title]' => 'required',
            'opt[email_administrator]' => 'required',
        ]);
    }
}
