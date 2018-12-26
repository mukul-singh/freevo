@extends('profile')
@section('content')
<?php for($i = 0; $i < 5; $i++) {?>
<div class="col-12 row box-wrap {{ ($i < 2) ? 'bg-white' : 'disabled' }}">
    <div class="col-3 pad-l0">
        <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
    </div>
    <div class="col-9 row nomar nopad font-12">
        <div class="col-5 mar-b20">
            <b>REQUEST ID</b><br/>
            <span class="font-12">Ad73467</span>
        </div>
        <div class="col-7 xs-nopad">
            <h3 class="f-heading-sm">Super Single Bed King</h3>
            REQUESTED ON 10/10/2018
        </div>
        <div class="col-5">
            ACTIVE<br/>
            <span class="font-12">Item requested</span>
        </div>
        <div class="col-7 xs-nopad">
            <table class="mar-b20">
                <tr>
                    <td><b>ITEM DELIVERY DATE</b></td>
                    <td>: 03 June 2018</td>
                </tr>
                <tr>
                    <td><b>SELECTED TIME SLOT</b></td>
                    <td>: Morning</td>
                </tr>
                <tr>
                    <td><b>DELIVERY FEE</b></td>
                    <td>: $120</td>
                </tr>
            </table>
        </div>
        <div class="col-12 pad-r0 text-right">
            <button class="btn hidden-xs">Need Help?</button>
            <button class="btn">View</button>
            <button class="btn" data-toggle="modal" data-target="#cancel-item-modal">Delete</button>
        </div>
    </div>
</div>
<?php } ?>
@stop