<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetParameter extends Controller
{
	/**
	 * Set Main menu
	 *
     * - Global navigations menu (array)
     * - functions output global navigations menu
     * - Table normalized correspondence table
	 */
    
    /* Hello test parameter */
    public $hello="hello set parameter";
    
    /* App title */
	public $app_name="cliche";
    
	/**
	 * Global Navigations Parameter
	 *
     * @return (array)$navigation
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
    
    
    /**
     * Global navigations output
     *
     * @para $navigation
     * @return voide
     */
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
    
    /**
     * Table normalized correspondence table
     * - base_users
     *
     * For login conditions, status is 2 and delflag is 0.
     */
    public $base_users = array(
        /**
         * ロール
         * 0: ロールは無効でロール自体が存在しません。
         * 1: 一般ユーザー (通常の利用ユーザー)
         * 2: 管理ユーザー
         */
        "role" => array(
            /* All other users are invalid */
            0 => array( "ja" => "無効", "en" => "invalid"),
            1 => array( "ja" => "ユーザー", "en" => "user"),
            2 => array( "ja" => "管理ユーザー", "en" => "admin"),
        ),
        /**
         * ステータス
         * 0: 無効 (未登録に同じ)
         * 1: 仮登録メール認証中 (一定期間を過ぎたら削除)
         * 2: 登録中
         */
        "status" => array(
            /* All other users are invalid */
            0 => "無効",
            1 => "仮登録メール認証中",
            2 => "登録中",
        ),
        /**
         * 削除フラグ
         * 0: 未削除 (ユーザーとして有効)
         * 1: 削除 (ユーザーとして無効)
         */
        "delflag" => array(
            /* All other users are invalid */
            0 => "未削除",
            1 => "削除",
        ),
    
    );
    
    
    
    
}
