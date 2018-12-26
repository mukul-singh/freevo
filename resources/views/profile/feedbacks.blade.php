@extends('profile')
@section('content')
<?php for($i = 0; $i < 5; $i++) {?>
<div class="col-12 row box-wrap {{ ($i < 2) ? 'bg-white' : 'disabled' }}">
    <div class="col-3 pad-l0">
        <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
    </div>
    <div class="col-9 col-sm-5 col-md-5 font-12 mar-b15">
        <h3 class="f-heading-sm">Super Single Bed King</h3>
        <div class="mar-v10"><b>REQUEST ID</b> : Ad343764</div>
        <table class="owner">
            <tr>
                <td class="nopad owner-avatar">
                    <img src="{{ BASE_URL }}assets/images/item-owner.png">
                </td>
                <td class="font-12 pad-l15">
                    Apnavi Pareek<br/>56 mins ago
                </td>
            </tr>
        </table>
    </div>
    <div class="col-12 col-sm-4 col-md-4 font-12 nopad">
        Letting go of pre-loved Ikea two-seat sofa bed, as we're moving to a new home. 
        Spacious sofa bed with removable covers for machine wash. Letting go of pre-loved 
        Ikea two-seat sofa bed.
        <br/><br/>
        <button class="btn nomar">Edit</button>
        <button class="btn" data-toggle="modal" data-target="#cancel-item-modal">Delete</button>
    </div>
</div>
<?php } ?>
@stop