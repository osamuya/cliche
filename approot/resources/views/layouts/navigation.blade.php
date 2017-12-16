<nav class="navbar-default navbar navbar-static-top">
	
	<div class="container">
		
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#patern05" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">{{ $parameter->app_name }}</a>
		</div>
		
		<div id="patern05" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
			<ul class="nav navbar-nav navbar-right">
				
<?php
//	echo count($parameter->getNavigation());
	foreach ($parameter->getNavigation() as $num=>$menus) {
		
		echo '<li><a href="'
				.$menus["LINK"].
				'" title="'
				.$menus["TITLE"].
				'" target="'.$menus["TARGET"].'">'
				.$menus["MENU_NAME"]
				.'</a>';
		if ($menus["SUBMENU"] !== NULL && is_array($menus["SUBMENU"])) {
			echo "<ul>";
			foreach ($menus["SUBMENU"] as $num => $items) {
//				var_dump($items["MENU_NAME"]);
//				var_dump($items["LINK"]);
//				var_dump($items["TITLE"]);
//				var_dump($items["TARGET"]);
				echo '<li><a href="'
				.$items["LINK"].
				'" title="'
				.$items["TITLE"].
				'" target="'.$items["TARGET"].'">'
				.$items["MENU_NAME"]
				.'</a>';
			}
			echo "</ul>";
		}
		echo '</li>';
	}

?>

				
				<li><a href="/regist/">新規投稿</a></li>
<!--
				<li class="">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						投稿板<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/board00.php">みんなの投稿</a></li>
						<li><a href="#">みんなの投稿その２</a></li>
						<li><a href="#">みんなの投稿その３</a></li>
						<li><a href="/top.php">TOPページデモ</a></li>
						<li><a href="/template.php">テンプレート</a></li>
						<li><a href="/template_form.php">フォームテンプレート</a>
						<li><a href="/calendar/calendar.php">カレンダー</a></li>
					</ul>
				</li>
-->
<!--
				<li class=""><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">アーカイブ<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">トピック一覧</a></li>
						<li><a href="#">画像一覧</a></li>
						<li><a href="#">地域から探す</a></li>
						<li><a href="#">トピック一覧</a></li>
					</ul>
				</li>
-->
<!--
				<li class=""><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ご利用方法<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="#">ご利用方法</a></li>
						<li><a href="#">注意事項</a></li>
						<li><a href="#">免責</a></li>
						<li><a href="#">管理者</a></li>
					</ul>
				</li>
-->
			</ul>
		</div>
	</div>
</nav>