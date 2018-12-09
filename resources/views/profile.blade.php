<div class="col-12 col-sm-10 col-md-9 row nopad center">
    <div class="col-12 nopad">
        <ul class="list-unstyled breadcrumb nopad font-12">
            <li>Home</li>
            <li>></li>
            <li>My Freevo</li>
        </ul>
    </div>
    <div class="col-3 nopad">
        <h3 class="f-heading">My Freevo</h3>
    </div>
    <div class="col-9 pad-r0">
        <h3 class="f-heading-sm">My Wishlist</h3>
    </div>
    <div class="col-3 nopad">
        <div class="list-filter">
            <ul class="list-unstyled">
                <li>Personal Information</li>
                <li>My Giveaways</li>
                <li>Requested Items</li>
                <li>My Wishlist</li>
                <li>Manage Addresses</li>
                <li>Feedbacks</li>
                <li class="sub">Given</li>
                <li class="sub">Received</li>
                <li>Help Center</li>
                <li>FAQs</li>
                <li>Deactivate Account</li>
            </ul>
        </div>
    </div>
    <div class="col-9 pad-r0">
        <?php for($i = 0; $i < 5; $i++) {?>
        <div class="col-12 row box-wrap {{ ($i < 2) ? 'bg-white' : 'disabled' }}">
            <div class="col-3 pad-l0">
                <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
            </div>
            <div class="col-9 font-12 pad-r0">
                <h3 class="f-heading-sm">Super Single Bed King</h3>
                <div class="mar-v10">BEDS</div>
                <table class="owner">
                    <tr>
                        <td class="nopad owner-avatar">
                            <img src="{{ BASE_URL }}assets/images/item-owner.png">
                        </td>
                        <td class="font-12 pad-l15">
                            Apnavi Pareek<br/>56 mins ago
                        </td>
                        <td class="pad-l15">
                            <div class="pad-l15">
                                53 Likes<br/>
                                Status: ACTIVE
                            </div>
                        </td>
                    </tr>
                </table>
                <br/>
                <div class="text-right">
                    <button class="btn">Request Item</button>
                    <button class="btn">View</button>
                    <button class="btn">Delete</button>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>