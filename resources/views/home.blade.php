<div class="homepage-splash">
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
    <div class="col-12 banner nopad">
        <img src="{{ BASE_URL }}assets/images/hands.svg">
        <div class="col-12 col-sm-10 col-md-10 center nopad">
            <div class="col-12 col-sm-7 col-md-6 quote">Give and get <i>freeloved</i> furniture from friends & neighbours.</div>
        </div>
    </div>
</div>
<div class="f-section-wrap">
    <h2 class="sec-title text-center">Freevo Stories</h2>
    <p class="sec-desc text-center center">Get to know ordinary people who are doing extraordinary things to help us grow our community.</p>
    <div class="row nomar">
        <?php for($i = 0; $i < 5; $i++) {?>
        <div class="col-6 col-sm-2 col-md-2 f-stories pointer <?= ($i == 0) ? 'offset-md-1 offset-sm-1': '';?>" data-toggle="modal" data-target="#story-modal">
            <img src="{{ BASE_URL }}assets/images/stories/{{ $i+1 }}.png" class="img-fluid">
            <div class="pin {{ ['pink', 'blue', 'orange'][rand(0, 2)] }}"></div>
            <p class="story-desc">Blessed away Queen Size Beds & 2-seater Sofa</p>
            <span class="story-user">Aish, Giver</span>
        </div>
        <?php } ?>
    </div>
    <p class="text-center more font-12 xs-nomar">
        <a href="{{ BASE_URL }}stories">READ MORE STORIES ></a>
    </p>
</div>
<div class="f-section-wrap bg-grey">
    <h2 class="sec-title text-center">Old is New</h2>
    <p class="sec-desc text-center center">Here are the latest freeloved home items near you!</p>
    <div class="row nomar">
        <?php for($i = 0; $i < 5; $i++) {?>
        <div class="col-6 col-sm-2 col-md-2 f-stories <?= ($i == 0) ? 'offset-md-1 offset-sm-1': '';?>">
            <div class="f-item">
                <div class="f-item-img">
                    <a href="{{ BASE_URL }}single">
                        <img src="{{ BASE_URL }}assets/images/single{{($i % 4) + 1}}.png" class="img-fluid">
                    </a>
                </div>
                <div class="add-to-wishlist">
                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wishlist.svg">
                </div>
                <div class="desc">
                    <a href="{{ BASE_URL }}single">
                        <p class="title">Table Lamp</p>
                        <span class="location">Aish, Giver</span>
                        <button class="btn">I AM INTERESTED</button>
                    </a>
                    <a href="{{ BASE_URL }}profile/ranjan">
                        <table class="table owner">
                            <tr>
                                <td class="nopad owner-avatar">
                                    <img src="{{ BASE_URL }}assets/images/item-owner.png">
                                </td>
                                <td class="font-12">
                                    Apnavi Pareek<br/>56 mins ago
                                </td>
                                <td class="nopad text-center">
                                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wish-heart.png">
                                    <div class="font-12">53</div>
                                </td>
                            </tr>
                        </table>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="f-section-wrap bg-grey xs-nopad">
    <h2 class="sec-title text-center">Freefurnish Your Room</h2>
    <p class="sec-desc text-center center">Shop for free? Why not!<br/>Choose which room do you need some furniture for.<p>
    <div class="row nomar">
        <?php for($i = 0; $i < 10; $i++) {?>
        <div class="col-6 col-sm-2 col-md-2 <?= ($i % 5 == 0) ? 'offset-md-1 offset-sm-1': '';?> text-center f-category">
            <img src="{{ BASE_URL }}assets/images/icons/categories/bedroom.svg" class="img-fluid icon">
            <div class="title">Bedroom</div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="f-section-wrap">
    <div class="col-12 col-sm-10 col-md-10 center">
        <h2 class="sec-title text-center">How it works</h2>
        <p class="sec-desc text-center center">Shop for free? Why not!<br/>Choose which room do you need some furniture for.<p>
        <div class="row nomar">
            <div class="col-12 col-sm-6 col-md-6 f-works">
                <h3 class="nomar f-heading">Givers</h3>
                <p>Shop for free? Why not!<br/>Choose which room do you need some furniture for.</p>
                <div class="row">
                    <div class="col-4">
                        <img src="{{ BASE_URL }}assets/images/icons/how/snap.svg" class="img-fluid icon">
                        <div class="step">SNAP A PHOTO</div>
                    </div>
                    <div class="col-4">
                        <img src="{{ BASE_URL }}assets/images/icons/how/post.svg" class="img-fluid icon">
                        <div class="step">POST THE ITEM</div>
                    </div>
                    <div class="col-4">
                        <img src="{{ BASE_URL }}assets/images/icons/how/wait.svg" class="img-fluid icon">
                        <div class="step">WAIT FOR COLLECTION</div>
                    </div>
                </div>
            </div>
            <div class="col-12 visible-xs mar-b20"><br/></div>
            <div class="col-12 col-sm-6 col-md-6 f-works border-l0">
                <h3 class="nomar f-heading">Takers</h3>
                <p>Shop for free? Why not!<br/>Choose which room do you need some furniture for.</p>
                <div class="row">
                    <div class="col-4">
                        <img src="{{ BASE_URL }}assets/images/icons/how/search.svg" class="img-fluid icon">
                        <div class="step">SEARCH AN ITEM</div>
                    </div>
                    <div class="col-4">
                        <img src="{{ BASE_URL }}assets/images/icons/how/request.svg" class="img-fluid icon">
                        <div class="step">SEND A REQUEST</div>
                    </div>
                    <div class="col-4">
                        <img src="{{ BASE_URL }}assets/images/icons/how/wait2.svg" class="img-fluid icon">
                        <div class="step">COLLECTION / WAIT FOR DELIVERY</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="story-modal">
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 story xs-pad-30">
                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wish-pink.png" width="20" class="wish-icon">
                    <h3 class="f-heading">Give and get freeloved furniture from friends & neighbours.</h3>
                    <p>
                        Eva gave almost everything in her house away before she moved out. She's gracious and 
                        calm even under time pressure. Thank you for reaching out to us. You are amazing!!
                    </p>
                    <div>
                        <table class="table">
                            <tr>
                                <td class="visible-xs pad-l0 pad-t0"><img src="{{ BASE_URL }}assets/images/stories/1.png" class="round-2" width="110" height="110"></td>
                                <td class="nopad">
                                    Eva,<br/>
                                    Giver @ Freevonation<br/><br/>
                                    BLESSED AWAY A QUEEN SIZE BED AND A 3-SEATER SOFA
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mar-b20 hidden-xs"><br/><br/></div>
                    <span class="lgrey font-12">
                        <img src="{{ BASE_URL }}assets/images/icons/share.svg" width="14" class="mar-r5">
                        SHARE
                    </span>
                    <span class="lgrey font-12 pad-l15">25 likes</span>
                </div>
                <div class="col-6 hidden-xs nopad">
                    <img src="{{ BASE_URL }}assets/images/stories/1.png" class="img-fluid giver-img">
                </div>
            </div>
        </div>
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