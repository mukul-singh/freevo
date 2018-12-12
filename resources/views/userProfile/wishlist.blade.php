@extends('userProfile')
@section('content')
<?php for($i = 0; $i < 5; $i++) {?>
<div class="col-12 row box-wrap {{ ($i < 2) ? 'bg-white' : 'disabled' }}">
    <div class="col-3 pad-l0">
        <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
    </div>
    <div class="col-9 font-12 pad-r0">
        <h3 class="f-heading-sm">Super Single Bed King</h3>
        <div class="mar-v10">POSTED ON 10/10/2018</div>
        <div class="row col">
            <div class="line-ht15 col-9 nopad">
                <b>ITEM PICKUP DATE</b> :  03 June 2019<br/>
                <b>SELECTED TIME SLOT</b> :  Morning<br/>
                <b>DELIVERY METHOD</b> : Local Movers
            </div>
            <div class="col-3 text-right pad-r0">
                <button class="btn">View</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
@stop