<div class="col-12 col-sm-10 col-md-9 row nopad center">
    <div class="col-12 nopad">
        <ul class="list-unstyled breadcrumb nopad font-12">
            <li>Home</li>
            <li>></li>
            <li>My Freevo</li>
        </ul>
        <ul class="list-unstyled breadcrumb nopad font-12">
            <li><</li>
            <li>Back to Requested Items</li>
        </ul>
    </div>
    <div class="box-wrap col-12 bg-white">
        <div class="row nomar">
            <div class="col-3 nopad">
                <b>GIVEAWAY ID</b><br/>
                Ad23423
            </div>
            <div class="col-3 nopad">
                ACTIVE<br/>
                Requests under process
            </div>
        </div>
        <br/>
        <div class="row nomar">
            <div class="col-4 nopad">
                <div class="font-12 mar-b15"><b>Item Posted</b></div>
                <div class="progress thin">
                    <div class="progress-bar bg-pink" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="progress-pin bg-pink"></span>
            </div>
            <div class="col-4 nopad">
                <div class="font-12 mar-b15"><b>Item Confirmed</b></div>
                <div class="progress thin">
                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="progress-pin bg-dark-grey"></span>
            </div>
            <div class="col-4 nopad">
                <div class="font-12 mar-b15">
                    <b>Item Picked up</b>
                    <b class="float-right">Delivered</b>
                </div>
                <div class="progress thin">
                    <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span class="progress-pin bg-dark-grey"></span>
                <span class="progress-pin bg-dark-grey float-right"></span>
            </div>
            <br/><br/><br/>
            <div class="col-6 row product nomar nopad">
                <div class="col-6 nopad">
                    <div class="info-title">LOCATION</div>
                    <div class="info">Primo Street</div>
                </div>
                <div class="col-6 nopad">
                    <div class="info-title">COLLECTION/DELIVERY METHOD</div>
                    <div class="info">For Delivery</div>
                </div>
                <div class="col-12 nopad"><hr/></div>
                <div class="col-6 nopad">
                    <div class="info-title">SIZE</div>
                    <div class="info">84L X 72B X 18H inches</div>
                </div>
                <div class="col-6 nopad">
                    <div class="info-title">QUANTITY</div>
                    <div class="info">1</div>
                </div>
                <div class="col-12 nopad"><hr/></div>
                <div class="col-6 nopad">
                    <div class="info-title">COLLECTION DATE</div>
                    <div class="info">03 June - 08 June</div>
                </div>
                <div class="col-6 nopad">
                    <div class="info-title">SELECTED TIME SLOT</div>
                    <div class="info">Morning</div>
                </div>
                <div class="col-12 nopad"><hr/></div>
            </div>
            <div class="col-6 row nomar product pad-r0">
                <div class="col-3 pad-r0">
                    <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
                </div>
                <div class="col-9 pad-r0">
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
        <br/>
        <button class="btn float-right" data-toggle="modal" data-target="#cancel-item-modal">Cancel</button>
        <button class="btn float-right">Edit Item</button>
    </div>
</div>
<div class="modal" id="cancel-item-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" data-dismiss="modal" width="14" class="float-right close">
                <b class="f-heading-xs">CANCEL THIS GIVEAWAY?</b>
                <h3 class="f-heading-sm">Super Single Bed King</h3>
                <p>
                    Are you sure you want to cancel this request? This request will be deleted immediately.
                    You can't undo this action
                </p>
                <br/>
                <button class="btn mar-r5">Don't Cancel</button>
                <button class="btn danger">Yes, Cancel it</button>
            </div>
        </div>
    </div>
</div>