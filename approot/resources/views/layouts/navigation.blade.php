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
                <!-- Auth -->
                {{--
                 Menu that separates users when logging in and logging out
                --}}
                @guest
                    <li>
                        <a href="{{ route('login') }}">
                            <i class="fa fa-sign-in fa-lg" aria-hidden="true"></i>
                            Login
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <i class="fa fa-plus-square fa-lg" aria-hidden="true"></i>
                            Register
                        </a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            <i class="fa fa-heart fa-lg" aria-hidden="true"></i>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="/home">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
                <!-- // Auth -->
                
                @if (env('APP_ENV') === 'local' || env('APP_ENV') === 'develop')
                <!-- {{env('APP_ENV')}} -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        <i class="fa fa-snowflake-o fa-lg" aria-hidden="true"></i>
                        Develop<span class="caret"></span>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/list">Develop list</a>
                            </li>
                        </ul>
                    </a>
                </li>
                <!-- // Develop -->
                @endif
			</ul>
		</div>
	</div>
</nav>



