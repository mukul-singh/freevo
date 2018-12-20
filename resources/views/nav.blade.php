<div class="bg-grey">
    <div class="nav">
        <div class="logo col-12 col-md-4 col-sm-4 nopad">
            <img src="{{ BASE_URL }}assets/images/icons/nav.png" onclick="openNav()" class="visible-xs xs-nav-menu" width="20">
            <a href="{{BASE_URL}}"><img src="{{ BASE_URL }}assets/images/icons/logo-main.svg" height="28"></a>
        </div>
        <div class="col-md-8 col-sm-8 nopad hidden-xs">
            <ul class="list-unstyled list-inline float-right">
                <li class="list-inline-item"><a href="{{ BASE_URL }}listing">ITEMS AVAILABLE</a></li>
                <li class="list-inline-item"><a href="{{ BASE_URL }}giveaway">GIVEAWAY AN ITEM</a></li>
                <li class="list-inline-item"><a href="{{ BASE_URL }}stories">FREEVO STORIES</a></li>
                <li class="list-inline-item"><a href="{{ BASE_URL }}profile">PROFILE</a></li>
                <li class="list-inline-item">SIGN UP</li>
                <li class="list-inline-item">LOGIN</li>
            </ul>
        </div>
        <div id="mySidenav" class="sidenav">
            <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" width="12" class="float-right" onclick="closeNav()">
            <ul class="list-unstyled list-inline">
                <li class="mar-b15"><a href="{{ BASE_URL }}listing">ITEMS AVAILABLE</a></li>
                <li class="mar-b15"><a href="{{ BASE_URL }}giveaway">GIVEAWAY AN ITEM</a></li>
                <li class="mar-b15"><a href="{{ BASE_URL }}stories">FREEVO STORIES</a></li>
                <li class="mar-b15"><a href="{{ BASE_URL }}profile">PROFILE</a></li>
                <li class="mar-b15">SIGN UP</li>
                <li class="mar-b15">LOGIN</li>
            </ul>
        </div>
    </div>