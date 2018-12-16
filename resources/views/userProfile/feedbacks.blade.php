@extends('userProfile')
@section('content')
<div class="box-wrap col-12 bg-white row nomar">
    <div class="col-12 col-sm-8 col-md-8 pad-l0">
        <label class="mar-b5">LEAVE A FEEDBACK</label>
        <textarea class="form-control" rows="4"></textarea>
    </div>
    <div class="col-12 col-sm-4 col-md-4 pad-r0">
        <label class="mar-b5">CHOOSE ITEM</label>
        <select class="form-control mar-b20">
            <option>Feedback</option>
        </select>
        <button class="btn blue full-w nomar big">SUBMIT FEEDBACK</button>
    </div>
</div>
<br/>
<div class="col-12 row nomar pad-l0">
    <div class="row">
    <?php for($i = 0; $i < 6; $i++) {?>
    <div class="col-4 pad-r0">
        <div class="box-wrap bg-white font-12">
            <table class="table owner">
                <tr>
                    <td class="nopad owner-avatar">
                        <img src="{{ BASE_URL }}assets/images/item-owner.png">
                    </td>
                    <td>
                        Apnavi Pareek<br/>56 mins ago
                    </td>
                </tr>
            </table>
            <h3 class="f-heading-sm mar-b5">Super Single Bed King</h3>
            <b>GIVEAWAY</b>
            <p class="mar-v10">
                Letting go of pre-loved Ikea two-seat sofa bed, as we're moving to a new home. 
                Spacious sofa bed with removable covers for machine wash. Letting go of pre-loved 
                Ikea two-seat sofa bed.
            </p>
        </div>
    </div>
    <?php } ?>
    </div>
</div>
@stop