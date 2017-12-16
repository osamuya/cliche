<nav class="navbar-default navbar navbar-static-top">

    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#patern05" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">{{env('APP_NAME')}}</a>
        </div>

        <div id="patern05" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        Menu1<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Menu1</a></li>
                        <li><a href="#">Menu2</a></li>
                        <li><a href="#">Menu3</a></li>
                    </ul>
                </li>
                <li class=""><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Menu1<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Menu1</a></li>
                        <li><a href="#">Menu2</a></li>
                        <li><a href="#">Menu3</a></li>
                    </ul>
                </li>
                <li class=""><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Menu1<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Menu1</a></li>
                        <li><a href="#">Menu2</a></li>
                        <li><a href="#">Menu3</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</nav>
