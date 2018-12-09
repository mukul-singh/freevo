<div class="col-12 col-sm-10 col-md-9 row nopad center">
    <div class="row">
        <?php for($i = 0; $i < 20; $i++) {?>
        <div class="col-6 col-sm-3 col-md-3 f-stories" data-toggle="modal" data-target="#story-modal">
            <img src="{{ BASE_URL }}assets/images/stories/{{ ($i % 5) + 1 }}.png" class="img-fluid">
            <div class="pin {{ ['pink', 'blue', 'orange'][rand(0, 2)] }}"></div>
            <p class="story-desc">Blessed away Queen Size Beds & 2-seater Sofa</p>
            <div class="clearfix"></div>
            <span class="story-user">Aish, Giver</span>
        </div>
        <?php } ?>
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