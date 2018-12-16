<div class="col-12 col-sm-10 col-md-9 row nopad center">
    <div class="col-12 mar-b20">
        <h3 class="f-heading-sm text-center">Edit Item</h3>
    </div>
    <div class="col-12 nopad mar-v10">ADD PHOTOS</div>
    <div class="col-12 row nopad nomar">
        <?php for($i = 0; $i < 6; $i++) {?>
        <div class="col-4 col-sm-2 col-md-2 item-photo-wrap">
            <div class="border add-item-photo text-center">
                <?php if($i < 2) {?>
                <img src="{{ BASE_URL }}assets/images/single1.png" class="item-img img-fluid">
                <?php } else {?>
                <img src="{{ BASE_URL }}assets/images/icons/close-cancel.svg" class="select-icon" width="14">
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="font-12 mar-v10 mar-b20"><span class="pointer">Add more ></span></div>
    <div class="col-12 nopad mar-v10">SELECT A CATEGORY</div>
    <div class="col-12 row nopad nomar bg-white">
        <?php for($x = 0; $x < 3; $x++){?>
            <div class="col-4 row nopad nomar">
                <?php for($i = 0; $i < 3; $i++){?>
                <div class="col-4 border select-category-wrap text-center pointer" onclick="selectItemCategory(this)">
                    <img src="{{ BASE_URL }}assets/images/icons/categories/bedroom.svg" class="img-fluid cat-img">
                    <b class="font-12">Bedroom</b>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-12 mar-b20"><br/></div>
    <div class="col-12 row nopad nomar">
        <div class="col-6 row nomar nopad font-12">
            <div class="col-6 pad-l0 mar-b20">
                <label class="mar-v10">SELECT ITEM TYPE</label>
                <select class="form-control">
                    <option>Armchair</option>
                    <option>Single Bed</option>
                    <option>Queen Bed</option>
                    <option>King Bed</option>
                </select>
            </div>
            <div class="col-6 pad-l0 mar-b20">
                <label class="mar-v10">SELECT QUANTITY</label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="col-12 pad-l0 mar-b20">
                <label class="mar-v10">ITEM NAME</label>
                <input type="text" class="form-control" value="Rocking Wooden Chair" />
            </div>
            <div class="col-12 pad-l0">
                <label class="mar-v10">DESCRIPTION (max 100 words)</label>
                <textarea class="form-control" rows="8">Letting go of pre-loved Ikea two-seat sofa bed, as we're moving to a new home. Spacious sofa bed with removable covers for machine wash.
                </textarea>
            </div>
        </div>
        <div class="col-6 row nomar nopad font-12">
            <div class="col-12 nopad">
                <div class="row mar-r0">
                    <label class="mar-v10 pad-l15">SIZE (L X B X H)</label>
                    <div class="row nomar mar-b20">
                        <div class="col-4 pad-r0">
                            <input type="text" class="form-control" value="24">
                        </div>
                        <div class="col-4 pad-r0">
                            <input type="text" class="form-control" value="18">
                        </div>
                        <div class="col-4 pad-r0">
                            <input type="text" class="form-control" value="24">
                        </div>
                    </div>
                    <div class="col-12 mar-b20"></div>
                    <div class="col-6 pad-r0 mar-b20">
                        <label class="mar-v10">DISMANTLING REQUIRED</label>
                        <select class="form-control">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-6 pad-r0 mar-b20">
                        <label class="mar-v10">COLLECTION/DELIVERY METHOD</label>
                        <select class="form-control">
                            <option>Local Movers</option>
                            <option>Local Movers</option>
                        </select>
                    </div>
                    <div class="col-8 pad-r0 mar-b20">
                        <label class="mar-v10">PICKUP ADDRESS</label>
                        <input type="text" class="form-control" value="High Street Center, #17-02, 1 North Bridge Road">
                    </div>
                    <div class="col-4 pad-r0 mar-b20">
                        <label class="mar-v10">POSTAL CODE</label>
                        <input type="text" class="form-control" value="179094">
                    </div>
                    <div class="col-6 pad-r0 mar-b20">
                        <label class="mar-v10">MOBILE NUMBER</label>
                        <input type="text" class="form-control" value="9090909090">
                    </div>
                    <div class="col-6 pad-r0 mar-b20">
                        <label class="mar-v10">EMAIL ADDRESS</label>
                        <input type="text" class="form-control" value="ranjan@gmail.com">
                    </div>
                    <div class="col-6 pad-r0 mar-b20">
                        <table class="table">
                            <tr>
                                <td class="pad-l0">
                                    <input type="checkbox">
                                </td>
                                <td class="pad-l0">
                                    Letting go of pre-loved Ikea two-seat sofa bed, as we're moving to a new home.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-6 pad-r0 mar-b20">
                        <button class="btn big blue full-w mar-v10">EDIT AND SAVE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>