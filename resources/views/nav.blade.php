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
                <li class="list-inline-item pointer" data-toggle="modal" data-target="#login-modal">SIGN UP</li>
                <li class="list-inline-item pointer" data-toggle="modal" data-target="#login-modal">LOGIN</li>
            </ul>
        </div>
        <div id="mySidenav" class="sidenav">
            <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" width="12" class="float-right" onclick="closeNav()">
            <ul class="list-unstyled list-inline">
                <li class="mar-b15"><a href="{{ BASE_URL }}listing">ITEMS AVAILABLE</a></li>
                <li class="mar-b15"><a href="{{ BASE_URL }}giveaway">GIVEAWAY AN ITEM</a></li>
                <li class="mar-b15"><a href="{{ BASE_URL }}stories">FREEVO STORIES</a></li>
                <li class="mar-b15"><a href="{{ BASE_URL }}profile">PROFILE</a></li>
                <li class="mar-b15" data-toggle="modal" data-target="#login-modal">SIGN UP</li>
                <li class="mar-b15" data-toggle="modal" data-target="#login-modal">LOGIN</li>
            </ul>
        </div>
    </div>
    <div class="modal" id="login-modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" data-dismiss="modal" width="12" class="float-right close visible-xs">
                    <div class="login-wrap text-center">
                        <br/>
                        <img src="{{ BASE_URL }}assets/images/icons/logo-main.svg" class="mar-b20" width="180">
                        <div class="col-9 center nopad">
                            <button class="btn big fb full-w mar-b5">
                                <table>
                                    <tr>
                                        <td>
                                            <img src="{{ BASE_URL }}assets/images/icons/social/facebook.png">
                                        </td>
                                        <td>LOGIN WITH FACEBOOK</td>
                                    </tr>
                                </table>
                            </button>
                        </div>
                        <div class="col-11 center nopad">
                            <hr class="mar-b20" />
                        </div>
                        <div class="col-9 center nopad">
                            <input type="text" class="form-control mar-b20" placeholder="Email">
                            <input type="password" class="form-control mar-b15" placeholder="Password">
                            <label class="font-12 float-left lgrey pointer">
                                <input type="checkbox">
                                Remember me
                            </label>
                            <i class="font-12 float-right lgrey pointer" onclick="getFgtPwdModal()">Forgot Password?</i>
                        </div>
                        <div class="col-9 text-right float-right hands">
                            <img src="{{ BASE_URL }}assets/images/hands.svg" class="img-fluid">
                        </div>
                    </div>
                    <div class="fgt-pwd-wrap xs-pad-30 hidden">
                        <label><b class="f-heading-xs">RESET PASSWORD</b></label>
                        <p>
                            Enter your email to reset your password. You will receive an email with instructions 
                            on how to reset your password. If you are experiencing problems resetting your password 
                            <b>contact us</b> or <b>send us an email</b>
                        </p>
                        <input type="text" class="form-control mar-b20" placeholder="Email">
                        <button class="btn blue big full-w mar-b15" onclick="getNewPwdModal()">RESET PASSWORD</button>
                        <label class="font-12 float-left lgrey pointer">Sign in</label>
                        <label class="font-12 float-right lgrey pointer" onclick="getLoginModal()">Not a Member? Signup</label>
                    </div>
                    <div class="new-pwd-wrap xs-pad-30 text-center hidden">
                        <div class="col-12 nopad">
                            <img src="{{ BASE_URL }}assets/images/icons/logo-main.svg" class="img-fluid" width="180">
                        </div>
                        <div class="col-12"><br/><br/></div>
                        <label class="mar-b15"><b class="f-heading-xs">CREATE A NEW PASSWORD</b></label>
                        <input type="password" class="form-control mar-b20" placeholder="New Password">
                        <input type="password" class="form-control mar-b20" placeholder="Confirm Password">
                        <button class="btn blue big full-w">CHANGE PASSWORD</button>
                    </div>
                </div>
            </div>
        </div>
    </div>