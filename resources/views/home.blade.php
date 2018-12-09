<div class="homepage-splash">
    <div class="nav">
        <div class="logo col-md-4 col-sm-4 nopad">
            <img src="{{ BASE_URL }}assets/images/icons/logo-main.svg" class="img-fluid">
        </div>
        <div class="col-md-8 col-sm-8 nopad">
            <ul class="list-unstyled list-inline float-right nav-links">
                <li class="list-inline-item">ITEMS AVAILABLE</li>
                <li class="list-inline-item">GIVEAWAY AN ITEM</li>
                <li class="list-inline-item">FREEVO STORIES</li>
                <li class="list-inline-item">HELP</li>
                <li class="list-inline-item">SIGN UP</li>
                <li class="list-inline-item">LOGIN</li>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
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
    <div class="clearfix"></div>
    <div class="row">
        <?php for($i = 0; $i < 5; $i++) {?>
        <div class="col-6 col-sm-2 col-md-2 f-stories <?= ($i == 0) ? 'offset-md-1 offset-sm-1': '';?>" data-toggle="modal" data-target="#story-modal">
            <img src="{{ BASE_URL }}assets/images/stories/{{ $i+1 }}.png" class="img-fluid">
            <div class="pin {{ ['pink', 'blue', 'orange'][rand(0, 2)] }}"></div>
            <p class="story-desc">Blessed away Queen Size Beds & 2-seater Sofa</p>
            <div class="clearfix"></div>
            <span class="story-user">Aish, Giver</span>
        </div>
        <?php } ?>
    </div>
    <p class="text-center more"><small>READ MORE STORIES ></small></p>
</div>
<div class="f-section-wrap bg-grey">
    <h2 class="sec-title text-center">Old is New</h2>
    <p class="sec-desc text-center center">Here are the latest freeloved home items near you!</p>
    <div class="clearfix"></div>
    <div class="row">
        <?php for($i = 0; $i < 5; $i++) {?>
        <div class="col-6 col-sm-2 col-md-2 f-stories <?= ($i == 0) ? 'offset-md-1 offset-sm-1': '';?>">
            <div class="f-item">
                <img src="{{ BASE_URL }}assets/images/item.png" class="img-fluid f-item-img">
                <div class="add-to-wishlist">
                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wishlist.svg">
                </div>
                <div class="desc">
                    <p class="title">Table Lamp</p>
                    <span class="location">Aish, Giver</span>
                    <button class="btn">I AM INTERESTED</button>
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
                                <div class="clearfix"></div>
                                <div class="font-12">53</div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<div class="f-section-wrap bg-grey">
    <h2 class="sec-title text-center">Freefurnish Your Room</h2>
    <p class="sec-desc text-center center">Shop for free? Why not!<br/>Choose which room do you need some furniture for.<p>
    <div class="clearfix"></div>
    <div class="row">
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
        <div class="clearfix"></div>
        <div class="row">
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
                <div class="col-6 story">
                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wish-pink.png" width="20" class="wish-icon">
                    <h3 class="f-heading">Give and get freeloved furniture from friends & neighbours.</h3>
                    <p>
                        Eva gave almost everything in her house away before she moved out. She's gracious and 
                        calm even under time pressure. Thank you for reaching out to us. You are amazing!!
                    </p>
                    <div>
                        Eva,<br/>
                        Giver @ Freevonation<br/><br/>
                        BLESSED AWAY A QUEEN SIZE BED AND A 3-SEATER SOFA
                    </div>
                    <br/><br/><br/><br/><br/>
                    <span class="lgrey font-12">
                        <img src="{{ BASE_URL }}assets/images/icons/share.svg" width="14" class="mar-r5">
                        SHARE
                    </span>
                    <span class="lgrey font-12 pad-l15">25 likes</span>
                </div>
                <div class="col-6 nopad">
                    <img src="{{ BASE_URL }}assets/images/stories/1.png" class="img-fluid giver-img">
                </div>
            </div>
        </div>
    </div>
</div>
