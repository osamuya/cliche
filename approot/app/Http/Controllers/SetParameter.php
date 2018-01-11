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
	public $app_name="SMAPON";
    
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
    
    /* 都道府県 */
    public $prefectures = array(
        1 => array("北海道", "札幌市"),
        2 => array("青森県", "青森市"),
        3 => array("岩手県", "盛岡市"),
        4 => array("宮城県", "仙台市"),
        5 => array("秋田県", "秋田市"),
        6 => array("山形県", "山形市"),
        7 => array("福島県", "福島市"),
        8 => array("茨城県", "水戸市"),
        9 => array("栃木県", "宇都宮市"),
        10 => array("群馬県", "前橋市"),
        11 => array("埼玉県", "さいたま市"),
        12 => array("千葉県", "千葉市"),
        13 => array("東京都", "新宿区"),
        14 => array("神奈川県", "横浜市"),
        15 => array("新潟県", "新潟市"),
        16 => array("富山県", "富山市"),
        17 => array("石川県", "金沢市"),
        18 => array("福井県", "福井市"),
        19 => array("山梨県", "甲府市"),
        20 => array("長野県", "長野市	"),
        21 => array("岐阜県", "岐阜市"),
        22 => array("静岡県", "静岡市"),
        23 => array("愛知県", "名古屋市"),
        24 => array("三重県", "津市"),
        25 => array("滋賀県", "大津市"),
        26 => array("京都府", "京都市"),
        27 => array("大阪府", "大阪市"),
        28 => array("兵庫県", "神戸市"),
        29 => array("奈良県", "奈良市"),
        30 => array("和歌山県", "和歌山市"),
        31 => array("鳥取県", "鳥取市"),
        32 => array("島根県", "松江市"),
        33 => array("岡山県", "岡山市"),
        34 => array("広島県", "広島市"),
        35 => array("山口県", "山口市"),
        36 => array("徳島県", "徳島市"),
        37 => array("香川県", "高松市"),
        38 => array("愛媛県", "松山市"),
        39 => array("高知県", "高知市"),
        40 => array("福岡県", "福岡市"),
        41 => array("佐賀県", "佐賀市"),
        42 => array("長崎県", "長崎市"),
        43 => array("熊本県", "熊本市"),
        44 => array("大分県", "大分市"),
        45 => array("宮崎県", "宮崎市"),
        46 => array("鹿児島県	", "鹿児島市"),
        47 => array("沖縄県", "那覇市"),
    );

}
