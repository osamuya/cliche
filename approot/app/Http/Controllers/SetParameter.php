<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetParameter extends Controller
{
	/**
	 * Set Main menu
	 *
	 */
    public $hello="hello set parameter";
	public $app_name="cliche";
	
	/**
	 * Global Navigations Parameter
	 *
	 */
	public function getNavigation()
	{
		$navigation = array(
			0 => array(
				"MENU_NAME" => "manu1",
				"LINK" => "/",
				"TARGET" => "_self",
				"TITLE" => "menu sample",
				"SUBMENU" => array(
					0 => array(
						"MENU_NAME" => "manu1",
						"LINK" => "/",
						"TARGET" => "_self",
						"TITLE" => "menu sample",
					),
				),
			),
		);
		return $navigation;
	}
	
	public function outputNavigations($data)
	{
		
		
		
		
		
		return "foobar";
	}
	
}
