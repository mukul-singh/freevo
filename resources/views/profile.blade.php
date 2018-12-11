<div class="col-12 col-sm-10 col-md-9 row nopad center">
    <div class="col-12 nopad">
        <ul class="list-unstyled breadcrumb nopad font-12">
            <li>Home</li>
            <li>></li>
            <li>My Freevo</li>
            <li>></li>
            <li>{{ $sectionTitle }}</li>
        </ul>
    </div>
    <div class="col-3 nopad">
        <h3 class="f-heading">My Freevo</h3>
    </div>
    <div class="col-9 pad-r0">
        <h3 class="f-heading-sm">{{ $sectionTitle }}</h3>
    </div>
    <div class="col-3 nopad">
        <div class="list-filter">
            <ul class="list-unstyled">
                <li {{ ($section == 'info') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=info">Personal Information</a></li>
                <li {{ ($section == 'giveaway') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=giveaway">My Giveaways</a></li>
                <li {{ ($section == 'requested') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=requested">Requested Items</a></li>
                <li {{ ($section == 'wishlist') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=wishlist">My Wishlist</a></li>
                <li {{ ($section == 'addresses') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=addresses">Manage Addresses</a></li>
                <li {{ ($section == 'feedbacks') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=feedbacks">Feedbacks</a></li>
                <li class="sub">Given</li>
                <li class="sub">Received</li>
                <li {{ ($section == 'help') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=help">Help Center</a></li>
                <li {{ ($section == 'faq') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=faq">FAQs</a></li>
                <li {{ ($section == 'deactivate') ? 'class=active' : '' }}><a href="{{ BASE_URL }}profile?section=deactivate">Deactivate Account</a></li>
            </ul>
        </div>
    </div>
    <div class="col-9 pad-r0">
        @section('content')
        @show
    </div>
</div>
<div class="modal" id="cancel-item-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" data-dismiss="modal" width="14" class="float-right close">
                <b class="f-heading-xs">CANCEL THIS ITEM?</b>
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