<div class="col-12 col-sm-11 col-md-10 row nopad center">
    <div class="col-12 text-center list-category">
        <img src="{{ BASE_URL }}assets/images/icons/categories/bedroom-blue.png">
        <h3 class="f-heading">Bedroom > Sofa Beds</h3>
        <p>Here are the latest freeloved bedroom items near you</p>
    </div>
    <div class="col-sm-10 col-md-10 offset-sm-2 offset-md-2 pagination-options">
        <span class="active">Bedroom > Sofa Beds : 1-32</span> of 2454 Options | Next | Previous
    </div>
    <div class="col-12 col-sm-2 col-md-2 nopad">
        <div class="col-12 visible-xs mar-v10">
            <b>CATEGORIES</b>
            <span class="font-11 float-right" onclick="toggleSideBar()">View</span>
        </div>
        <div class="list-filter">
            <ul class="list-unstyled">
                <li>Bedroom</li>
                <li class="sub active">Sofa & Loveseats</li>
                <li class="sub">Sofa Beds</li>
                <li class="sub">Armchairs & Ottomans</li>
                <li class="sub">Coffee Tables</li>
                <li class="sub">Side Tables</li>
                <li class="sub">TV & Media Consoles</li>
                <li class="sub">Sideboards & Shelves</li>
                <li class="sub">Living Room Sets</li>
                <li>Living room</li>
                <li>Kitchen</li>
                <li>Bath & Laundry</li>
                <li>Dining</li>
                <li>Baby & Kids</li>
                <li>Decor</li>
                <li>Home Office</li>
                <li>Garden & Balcony</li>
                <li>Hallway</li>
            </ul>
        </div>
        <div class="list-filter">
            <div class="col-12 nopad mar-b15">Filter By</div>
            <div class="row nomar">
                <div class="col-6 col-sm-12 col-md-12 pad-l0 mar-b15 xs-nomar sm-nopad">
                    <select class="form-control">
                        <option>Geylang</option>
                        <option>Option 2</option>
                    </select>
                </div>
                <div class="col-6 col-sm-12 col-md-12 pad-r0 sm-nopad">
                    <select class="form-control">
                        <option>Geylang</option>
                        <option>Option 2</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-10 col-md-10 xs-pad-l0">
        <div class="row">
            <?php for($i = 1; $i < 29; $i++) {?>
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
    <div class="col-sm-10 col-md-10 offset-sm-2 offset-md-2 pagination-options">
        <span class="active">Bedroom > Sofa Beds : 1-32</span> of 2454 Options | Next | Previous
    </div>
</div>