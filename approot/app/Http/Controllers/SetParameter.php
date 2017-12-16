<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetParameter extends Controller
{
	/**
	 * Set Main menu
	 *
	 */
    
    /* Hello test parameter */
    public $hello="hello set parameter";
    
    /* App title */
	public $app_name="cliche";
    
	/**
	 * Global Navigations Parameter
	 *
	 */
    public $navigation=array(
        0 => array (
            "MENU_NAME" => "HOME",
            "LINK" => "/",
            "TARGET" => "_self",
            "TITLE" => "home page",
        ),
        1 => array (
            "MENU_NAME" => "MENU001",
            "LINK" => "/",
            "TARGET" => "_self",
            "TITLE" => "menu sample",
            "SUBMENU" => array(
                0 => array(
                    "MENU_NAME" => "SUBMENU001",
                    "LINK" => "/",
                    "TARGET" => "_blank",
                    "TITLE" => "menu sample",
                ),
            ),

        ),
    );
    

	
	public function outputNavigations($data)
	{
		
		
		
		
		
		return "foobar";
	}
	
    public function makeMenu($navigation)
    {
        // class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
        if (!empty($navigation[0]["SUBMENU"])) {
            $dropDownFlg = true;
            $menuToggleClass="class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'";
            $caret = "<b class='caret'></b>";
        } else {
            $dropDownFlg = false;
            $menuToggleClass="";
            $caret="";
        }
        
        
        
        
        foreach($navigation as $item) {
            
            echo "<li>";
            if ($dropDownFlg==true) {
                $item["LINK"] = "#";
            }
            echo "<a href='".$item["LINK"]."' target='".$item["TARGET"]."' title='".$item["TITLE"]."' ".$menuToggleClass.">";
            echo $item["MENU_NAME"];
            echo $caret;
            echo "</a>";
            
            if (!empty($item["SUBMENU"])) {
                echo "<ul class='dropdown-menu'>";
                foreach ($item["SUBMENU"] as $subitem) {
                    echo "<li>";
                    echo "<a href=''>";
                    echo $subitem["MENU_NAME"];
                    echo "</a>";
                    echo "</li>";
                }
                echo "</ul>";
            }
            
            
            
            echo "</li>";
        }
        
        
        return "";
    }
}
