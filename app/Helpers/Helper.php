<?php 

namespace App\Helpers;
use Blade;
use Carbon\Carbon;
class Helper
{
    public function __construct() {
 
    }

    public function menu($group = "main-menu")
    {
    	$menu = new Menu($group);        
        return $menu->generateMenu();
    }

    public function compress($soure,$destination){
        $com = new Compress($soure,$destination);
        return $com->run();
    }

    public function extract($soure,$destination){
        $com = new Compress($soure,$destination);
        return $com->extract();
    }

    public function widget($class,$option = []){
        $class = "App\\Widgets\\".str_replace(".", "\\", $class);
        $widget = new $class;
        return $widget->test();
    }

    public function taxonomyLink($taxonomy,$link = true){
        $res = [];
        if($link){
            foreach ($taxonomy as $value) {
                $res[] = '<a href="'.url("/category/".$value->slug).'">'.$value->name.'</a>';
            }
        }else{
            foreach ($taxonomy as $value) {
                $res[] = $value->name;
            }
        }
        return implode(",", $res);
    }

    public function bbcode($content){
        $bbcode = new BBCode();
        return $bbcode->toHTML($content);
    }
}