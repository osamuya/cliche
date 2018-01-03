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
        "home" => array (
            "MENU_NAME" => "HOME",
            "LINK" => "/",
            "TARGET" => "_self",
            "TITLE" => "home page",
            "ICON" => "<i class='fa fa-home fa-lg' aria-hidden='true'></i>",
            "SUBMENU" => array(),
        ),
        "blog" => array (
            "MENU_NAME" => "BLOG",
            "LINK" => "#",
            "TARGET" => "",
            "TITLE" => "Blog",
            "ICON" => "<i class='fa fa-bars fa-lg' aria-hidden='true'></i>",
            "SUBMENU" => array(
                0 => array(
                    "MENU_NAME" => "Blog",
                    "LINK" => "/blog/index",
                    "TARGET" => "_self",
                    "TITLE" => "Blog top page",
                ),
                1 => array(
                    "MENU_NAME" => "Blog Archives",
                    "LINK" => "/blog/archives",
                    "TARGET" => "_self",
                    "TITLE" => "Blog archives",
                ),
            ),
        ),
//        3 => array (
//            "MENU_NAME" => "Archives",
//            "LINK" => "#",
//            "TARGET" => "_self",
//            "TITLE" => "menu sample",
//            "ICON" => "<i class='fa fa-archive fa-lg' aria-hidden='true'></i>",
//            "SUBMENU" => array(
//                0 => array(
//                    "MENU_NAME" => "Sign up",
//                    "LINK" => "/register",
//                    "TARGET" => "_blank",
//                    "TITLE" => "new regist",
//                ),
//                1 => array(
//                    "MENU_NAME" => "Login",
//                    "LINK" => "/login",
//                    "TARGET" => "_self",
//                    "TITLE" => "user login",
//                ),
//            ),
//        ),
        "archives" => array (
            "MENU_NAME" => "Archives",
            "LINK" => "#",
            "TARGET" => "_self",
            "TITLE" => "menu sample",
            "ICON" => "<i class='fa fa-archive fa-lg' aria-hidden='true'></i>",
            "SUBMENU" => array(
                0 => array(
                    "MENU_NAME" => "Navigation sample 001",
                    "LINK" => "/",
                    "TARGET" => "_self",
                    "TITLE" => "Navigation sample",
                ),
                1 => array(
                    "MENU_NAME" => "Navigation sample 002",
                    "LINK" => "/",
                    "TARGET" => "_self",
                    "TITLE" => "Navigation sample",
                ),
                2 => array(
                    "MENU_NAME" => "Navigation sample 003",
                    "LINK" => "/",
                    "TARGET" => "_self",
                    "TITLE" => "Navigation sample",
                ),
            ),
        ),
    );
    
    public function makeMenu($navigation)
    {
        foreach($navigation as $item) {
            
            echo "<li>\n";
            if ($item["LINK"] == "#") {
                $menuToggleClass="class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'";
                $caret = "<b class='caret'></b>\n";
            } else {
                $menuToggleClass="";
                $caret="";
            }
            echo "<a href='".$item["LINK"]."' target='".$item["TARGET"]."' title='".$item["TITLE"]."' ".$menuToggleClass.">\n";
            if (!empty($item["ICON"])) {
                echo $item["ICON"]."\n";
            }
            echo $item["MENU_NAME"]."\n";
            echo $caret."\n";
            echo "</a>\n";
            
            if (!empty($item["SUBMENU"])) {
                echo "<ul class='dropdown-menu'>\n";
                foreach ($item["SUBMENU"] as $subitem) {
//                    var_dump($subitem);
                    echo "<li>\n";
                    echo "<a href='".$subitem["LINK"]."'>\n";
                    echo $subitem["MENU_NAME"]."\n";
                    echo "</a>\n";
                    echo "</li>\n";
                }
                echo "</ul>\n";
            }
            echo "</li>";
        }
        return "";
    }
}
