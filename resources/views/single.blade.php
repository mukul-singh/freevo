<div class="col-12 col-sm-10 col-md-9 row nopad center product">
    <div class="col-12 nopad xs-pad-l15 mar-b15">
        <ul class="list-unstyled breadcrumb nopad font-12">
            <li>Home</li>
            <li>></li>
            <li>Bedroom</li>
            <li>></li>
            <li>Bed & Mattresses</li>
        </ul>
    </div>
    <div class="col-12 col-sm-6 col-md-6 nopad img-catalog mar-b20">
        <div class="col-12 nopad mar-b20" id="img-view">
            <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid" id="img-view">
        </div>
        <div id="img-catalog" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="container carousel-inner nopad">
                <div class="carousel-item active">
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single1.png" class="active">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single2.png" data-full-img="{{ BASE_URL }}assets/images/single2.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single3.png" data-full-img="{{ BASE_URL }}assets/images/single3.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single1.png" data-full-img="{{ BASE_URL }}assets/images/single1.png">
                    </div>   
                </div>
                <div class="carousel-item">
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single1.png" data-full-img="{{ BASE_URL }}assets/images/single1.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single2.png" data-full-img="{{ BASE_URL }}assets/images/single2.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single3.png" data-full-img="{{ BASE_URL }}assets/images/single3.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single1.png" data-full-img="{{ BASE_URL }}assets/images/single1.png">
                    </div>   
                </div>
                <div class="carousel-item">
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single1.png" data-full-img="{{ BASE_URL }}assets/images/single1.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single2.png" data-full-img="{{ BASE_URL }}assets/images/single2.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single3.png" data-full-img="{{ BASE_URL }}assets/images/single3.png">
                    </div>
                    <div class="col-3">
                        <img src="{{ BASE_URL }}assets/images/single1.png" data-full-img="{{ BASE_URL }}assets/images/single1.png">
                    </div>   
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#img-catalog" data-slide="prev">
                <img src="{{ BASE_URL }}assets/images/icons/prev.png" width="12">
            </a>
            <a class="carousel-control-next nomar" href="#img-catalog" data-slide="next">
                <img src="{{ BASE_URL }}assets/images/icons/next.png" width="12">
            </a>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-6 product-desc mar-b20">
        <h3 class="f-heading">Super Single Bed King</h3>
        <table class="table owner">
            <tr>
                <td class="nopad owner-avatar">
                    <img src="{{ BASE_URL }}assets/images/item-owner.png">
                </td>
                <td class="name">
                    In BEDS<br/>
                    Posted 56 Mins ago by <b>Apnavi Pareek</b>
                </td>
                <td class="nopad text-center">
                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wish-heart.png">
                    <div class="font-12">53</div>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-6 xs-pad-r0">
                <button class="btn full-w">
                    <img src="{{ BASE_URL }}assets/images/icons/wishlist/wish-heart.png">
                    ADD TO WISHLIST
                </button>
            </div>
            <div class="col-6">
                <button class="btn full-w" data-toggle="modal" data-target="#request-item-modal">SEND REQUEST</button>
            </div>
            <div class="col-12"><br/></div>
            <div class="col-6">
                <div class="info-title">LOCATION</div>
                <div class="info">Primo Street</div>
            </div>
            <div class="col-6">
                <div class="info-title">COLLECTION DATE</div>
                <div class="info">03 June - 08 June</div>
            </div>
            <div class="col-12"><hr/></div>
            <div class="col-6">
                <div class="info-title">SIZE</div>
                <div class="info">84L X 72B X 18H inches</div>
            </div>
            <div class="col-6">
                <div class="info-title">QUANTITY</div>
                <div class="info">1</div>
            </div>
            <div class="col-12"><hr/></div>
            <div class="col-12">
                <div class="info-title">COLLECTION / DELIVERYMETHOD</div>
                <div class="info">Local Movers</div>
            </div>
            <div class="col-12"><hr/></div>
            <div class="col-12">
                <div class="info-title">DESCRIPTION</div>
                <div class="info">
                    Letting go of pre-loved Ikea two-seat sofa bed, as we're moving to a new home. 
                    Spacious sofa bed with removable covers for machine wash. Letting go of pre-loved 
                    Ikea two-seat sofa bed, as we're moving to a new home. Spacious sofa bed with 
                    removable covers for machine wash. Letting go of pre-loved Ikea two-seat sofa bed, 
                    as we're moving to a new home.
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 hidden-xs"><br/><br/><br/></div>
    <div class="col-12 pad-l0">
        <div class="mar-b15 xs-pad-l15 f-heading-xs"><b>Similar Items</b></div>
        <div class="row">
        <?php for($i = 1; $i < 5; $i++) {?>
        <div class="col-6 col-sm-3 col-md-3 pad-r0">
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
                        <span class="location">Bedok South</span>
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
    <div class="col-12 hidden-xs"><br/><br/><br/></div>
    <div class="col-12 pad-l0">
        <div class="mar-b15 xs-pad-l15 f-heading-xs"><b>Other items from same giver</b></div>
        <div class="row">
        <?php for($i = 1; $i < 4; $i++) {?>
        <div class="col-6 col-sm-3 col-md-3 pad-r0">
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
                        <span class="location">Bedok South</span>
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

    <div class="modal" id="request-item-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" data-dismiss="modal" width="12" class="close visible-xs">
                <div class="row" id="send-req-wrap">
                    <div class="col-2 col-sm-2 col-md-2 pad-r0">
                        <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid mar-b15">
                    </div>
                    <div class="col-10 col-sm-10 col-md-10 row nomar">
                        <div class="col-12 mar-b15">
                            <h5 class="f-heading-sm">Super Single Bed King</h5>
                        </div>
                        <div class="col-6 xs-pad-l0 hidden-xs">
                            <div class="info-title">LOCATION</div>
                            <div class="info">Primo Street</div>
                        </div>
                        <div class="col-6 xs-pad-l0 hidden-xs">
                            <div class="info-title">COLLECTION DATE</div>
                            <div class="info">03 June - 08 June</div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-md-10 offset-sm-2 offset-md-2 row xs-nomar">
                        <div class="col-6 xs-pad-l0 visible-xs">
                            <div class="info-title">LOCATION</div>
                            <div class="info">Primo Street</div>
                        </div>
                        <div class="col-6 xs-pad-l0 visible-xs">
                            <div class="info-title">COLLECTION DATE</div>
                            <div class="info">03 June - 08 June</div>
                        </div>
                        <div class="col-12 xs-pad-l0"><hr/></div>
                        <div class="col-6 xs-pad-l0">
                            <div class="info-title">SIZE</div>
                            <div class="info">84L X 72B X 18H inches</div>
                        </div>
                        <div class="col-6 xs-pad-l0">
                            <div class="info-title">QUANTITY</div>
                            <div class="info">1</div>
                        </div>
                        <div class="col-12 xs-pad-l0"><hr/></div>
                        <div class="col-12 xs-pad-l0">
                            <div class="info-title">COLLECTION / DELIVERY METHOD</div>
                            <div class="info">Local Movers</div>
                        </div>
                        <div class="col-12 xs-pad-l0"><hr/></div>
                    </div>
                </div>
                <div class="col-12 row pad-r0" id="step1">
                    <div class="col-12 nopad mar-b20">
                        <b>SEND AN ITEM REQUEST</b>
                        <div class="progress">
                            <div class="progress-bar bg-pink" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-12">Please profile your details</span>
                    </div>
                    <div class="col-12 nopad">
                        <div class="row mar-b15">
                            <div class="col-12 mar-b20">
                                <div class="info-title">DROP-OFF ADDRESS</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-sm-8 col-md-8 mar-b20">
                                <div class="info-title">NAME THE LOCATION</div>
                                <input type="text" class="form-control" placeholder="Give a name to the location">
                            </div>
                            <div class="col-12 col-sm-4 col-md-4 mar-b20">
                                <div class="info-title">POSTAL CODE</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mar-b20">
                                <div class="info-title">MOBILE NUMBER</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 mar-b20">
                                <div class="info-title">EMAIL ADDRESS</div>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <button class="btn blue float-right" onclick="showContent('#step2', '#step1')">
                            <img src="{{ BASE_URL }}assets/images/icons/confirm-btn.png">
                            REQUEST ITEM
                        </button>
                    </div>
                </div>
                <div class="col-12 row pad-r0 hidden" id="step2">
                    <div class="col-12 nopad mar-b15">
                        <b>SEND AN ITEM REQUEST</b>
                        <div class="progress">
                            <div class="progress-bar bg-pink" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-12">Please select dropoff address</span>
                    </div>
                    <div class="col-12 nopad">
                        <div class="mar-v10">
                            <b class="font-12">RANJAN THANGJAM</b>
                        </div>
                        <div class="col-12 font-12 box-wrap border">
                            High Street Center, #17-02, 1 North Bridge Road<br/>
                            179094<br/><br/>
                            Lift Available<br/><br/>
                            9090899089<br/>
                            ranjan.thangjam@gmail.com
                            <img src="{{ BASE_URL }}assets/images/icons/confirmed.svg" class="float-right" width="14">
                        </div>
                        <img src="{{ BASE_URL }}assets/images/icons/prev.svg" width="12" class="address-arrow left pointer hidden-xs">
                        <img src="{{ BASE_URL }}assets/images/icons/next.svg" width="12" class="address-arrow right pointer hidden-xs">
                        <div class="col-12 nopad font-12 mar-v10 mar-b20">
                            Edit Address  Details
                            <span class="float-right">Add a new address ></span>
                        </div>
                        <button class="btn blue float-right" onclick="showContent('#step3', '#step2')">
                            <img src="{{ BASE_URL }}assets/images/icons/confirm-btn.png">
                            REQUEST ITEM
                        </button>
                    </div>
                </div>
                <div class="col-12 row pad-r0 hidden" id="step3">
                    <div class="col-12 nopad mar-b15">
                        <b>SEND AN ITEM REQUEST</b>
                        <div class="progress">
                            <div class="progress-bar bg-pink" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-12">Please select dropoff address</span>
                        <span class="font-11 float-right">Add a new address ></span>
                    </div>
                    <div class="col-12 nopad">
                        <div class="row font-12 mar-b20">
                            <div class="col-6">
                                <div class="col-12 border border-pink">
                                    <br/>
                                    RANJAN<br/>
                                    High Street Center, #17-02, 1 North Bridge Road<br/>
                                    179094<br/>
                                    9090899089<br/>
                                    ranjan.thangjam@gmail.com<br/><br/>
                                </div>
                                <div class="form-control nomar bg-pink border-pink no-round">
                                    <img src="{{ BASE_URL }}assets/images/icons/confirmed.svg" width="14" class="mar-r5">
                                    DROP ADDRESS SELECTED
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="col-12 border">
                                    <br/>
                                    SATYA<br/>
                                    High Street Center, #17-02, 1 North Bridge Road<br/>
                                    179094<br/>
                                    9090899089<br/>
                                    ranjan.thangjam@gmail.com<br/><br/>
                                </div>
                            </div>
                        </div>
                        <img src="{{ BASE_URL }}assets/images/icons/prev.svg" width="12" class="address-arrow left pointer hidden-xs">
                        <img src="{{ BASE_URL }}assets/images/icons/next.svg" width="12" class="address-arrow right pointer hidden-xs">
                        <button class="btn blue float-right" onclick="showContent('#step4', '#step3')">
                            <img src="{{ BASE_URL }}assets/images/icons/confirm-btn.png">
                            REQUEST ITEM
                        </button>
                    </div>
                </div>
                <div class="col-12 row pad-r0 hidden" id="step4">
                    <div class="col-12 nopad mar-b15">
                        <b>CONFIRM YOUR REQUEST. YOU ARE ALMOST THERE</b>
                        <div class="progress">
                            <div class="progress-bar bg-pink" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="font-12">Confirm your delivery preference below.</span>
                    </div>
                    <div class="col-12 nopad">
                        <div class="row">
                            <div class="col-6">
                                <div class="info-title">DELIVERY DATE</div>
                                <input type="text" class="form-control">
                            </div>
                            <div class="col-6">
                                <div class="info-title">SELECT A TIME</div>
                                <select class="form-control">
                                    <option>Morning</option>
                                    <option>Afternoon</option>
                                    <option>Evening</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 nopad"><hr/></div>
                    <div class="col-12 col-sm-6 col-md-6 pad-l0 xs-nopad mar-b15">
                        <div class="row">
                            <div class="col-12">
                                <span class="float-left">DELIVERY FEE</span>
                                <b class="float-right">$120.00</b>
                            </div>
                            <div class="col-12"><hr/></div>
                            <div class="col-12">
                                <table>
                                    <tr>
                                        <td>Coupon</td>
                                        <td class="pad-h15">
                                            <input type="text" class="form-control font-12 nomar" />
                                        </td>
                                        <td><b class="font-12">APPLY</b></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12"><hr/></div>
                            <div id="coupon-msg" class="font-12 col-12">Coupon code successfully applied!</div>
                            <div class="col-12">
                                <span class="float-left">NO GST</span>
                                <b class="float-right">0.00</b>
                            </div>
                            <div class="col-12"><hr/></div>
                            <div class="col-12">
                                <span class="float-left">TOTAL</span>
                                <b class="float-right total">$ 120</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 pad-r0 xs-nopad mar-b15">
                        <table class="check">
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td class="font-12">
                                    Letting go of pre-loved Ikea two-seat sofa bed, as we're moving to a new home. 
                                    Spacious sofa bed with removable covers for machine wash.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 nopad">
                        <button class="btn blue float-right" onclick="showContent('#step5', '#step4, #send-req-wrap')">
                            <img src="{{ BASE_URL }}assets/images/icons/confirm-btn.png">
                            CONFIRM ITEM
                        </button>
                    </div>
                </div>
                <div class="row hidden" id="step5">
                    <div class="col-12 row nomar">
                        <div class="col-12 pad-l0 mar-b15">
                            <b>THANKS FOR THE REQUEST</b>
                            <div class="progress">
                                <div class="progress-bar bg-pink" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="font-12">You have successfully sent a request</span>
                        </div>
                    </div>
                    <div class="col-12 mar-b15"></div>
                    <div class="col-2 col-sm-2 col-md-2 pad-r0">
                        <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
                    </div>
                    <div class="col-10 col-sm-10 col-md-10 row nomar xs-pad-l0">
                        <div class="col-12">
                            <h5 class="f-heading-sm">Super Single Bed King</h5>
                        </div>
                        <br/><br/>
                        <div class="col-6">
                            <div class="info-title">LOCATION</div>
                            <div class="info">Primo Street</div>
                        </div>
                        <div class="col-6">
                            <div class="info-title">COLLECTION DATE</div>
                            <div class="info">03 June - 08 June</div>
                        </div>
                        <div class="col-12"><hr/></div>
                        <div class="col-6">
                            <div class="info-title">SIZE</div>
                            <div class="info">84L X 72B X 18H inches</div>
                        </div>
                        <div class="col-6">
                            <div class="info-title">QUANTITY</div>
                            <div class="info">1</div>
                        </div>
                        <div class="col-12"><hr/></div>
                        <div class="col-6">
                            <div class="info-title">DELIVERY DATE</div>
                            <div class="info">03 June 2019</div>
                        </div>
                        <div class="col-6">
                            <div class="info-title">SELECTED TIME SLOT</div>
                            <div class="info">Morning</div>
                        </div>
                        <div class="col-12"><hr/></div>
                        <div class="col-6">
                            <div class="info-title">DELIVERY FEE</div>
                            <div class="info">$120</div>
                        </div>
                        <div class="col-6">
                            <div class="info-title">REQUEST ID</div>
                            <div class="info">RQ87346</div>
                        </div>
                        <div class="col-12"><hr/></div>
                        <div class="col-12">
                            <span class="font-11 lgrey">You can see your requested items in</span>
                            <br/>
                            <div class="font-11 mar-b15">My Freevo > Requested Items > Request ID #RQ87346</div>
                            <button class="btn blue">VIEW REQUEST</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
