<div class="col-12 col-sm-10 col-md-9 row nopad center">
    <div class="col-12 mar-b15 text-center">
        <img src="{{ BASE_URL }}assets/images/icons/story-icon.png" width="52">
    </div>
    <div class="col-12 col-sm-9 col-md-9 text-center center">
        <h3 class="f-heading">Freevo Stories</h3>
        <p class="fw-300">
            We'd like to express our great admiration to all these exceptional human beings who have give away their own
            furniture that they used to love for the benefit of others. We are thankful that we have crossed paths and we
            wish more blessings and gifts find your way. YOU inspire us to continue to GIVE.
        </p>
        <button class="btn big blue mar-b20">SUBMIT YOUR STORY</button>
    </div>
    <div class="col-12 mar-b20"></div>
    <div class="row col-12 col-sm-8 col-md-8 xs-pad-r0 center">
        <div class="col-12 col-sm-5 col-md-6 xs-pad-l0">
            <label>SEARCH A STORY</label>
            <input type="text" class="form-control">
        </div>
        <div class="visible-xs mar-b20 col-12"></div>
        <div class="col-6 col-sm-3 col-md-3 pad-l0">
            <label>FILTER BY YEAR</label>
            <select class="form-control">
                <option>Select</option>
            </select>
        </div>
        <div class="col-6 col-sm-3 col-md-3 pad-l0">
            <label>FILTER BY MONTH</label>
            <select class="form-control">
                <option>Select</option>
            </select>
        </div>
    </div>
    <div class="col-12 mar-b20"><br/></div>
    <div class="row mar-r0 xs-nomar">
        <?php for($i = 0; $i < 20; $i++) {?>
        <div class="col-6 col-sm-3 col-md-3 f-stories" data-toggle="modal" data-target="#story-modal">
            <img src="{{ BASE_URL }}assets/images/stories/{{ ($i % 5) + 1 }}.png" class="img-fluid">
            <div class="pin {{ ['pink', 'blue', 'orange'][rand(0, 2)] }}"></div>
            <p class="story-desc">Blessed away Queen Size Beds & 2-seater Sofa</p>
            <span class="story-user">Aish, Giver</span>
        </div>
        <?php } ?>
    </div>
</div>
<div class="modal" id="story-modal">
    <div class="modal-dialog">
        <div class="modal-content col-12">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 story xs-pad-30">
                    <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" data-dismiss="modal" width="12" class="close visible-xs">
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