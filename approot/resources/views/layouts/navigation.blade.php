<?php
/**
Referer to:
http://bootstrap3-guide.com/compornent/demo_navbar.html

Menu parameter settiings on app/Http/Controllers/SetParameter.php
*/
?>
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
                /* app/Http/Controllers/SetParameter */
                $navigationArray = $parameter->navigation;
                $menu = $parameter->makeMenu($navigationArray);
                echo $menu;
            ?>
			</ul>
		</div>
	</div>
</nav>