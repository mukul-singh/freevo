@extends('profile')
@section('content')
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
            <button class="btn" data-toggle="modal" data-target="#cancel-item-modal">Delete</button>
        </div>
    </div>
</div>
<?php } ?>
@stop