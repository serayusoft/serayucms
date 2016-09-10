<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Modules\ContentManager\Models\Articles;
use App\Modules\ContentManager\Models\Terms;
use App\Modules\ContentManager\Models\TermRelationships;
use App\Http\Requests;
use App\Facades\Theme;


class PostController extends Controller
{
    public function index(){
    	return view(Theme::active().'.post.index');
    }

    public function view($slug){
        $model = Articles::where("post_name",$slug)->firstOrFail();
    	return view(Theme::active().'.post.view',["model"=>$model]);
    }

    public function category($slug){
    	$model = Terms::where("slug",$slug)->first();
        print_r($model);

    	//return view(Theme::active().'.post.view',["model"=>$model]);
    }
}
