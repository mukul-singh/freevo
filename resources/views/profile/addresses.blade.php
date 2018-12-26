@extends('profile')
@section('content')
<?php for($i = 0; $i < 2; $i++) {?>
<div class="col-12 row box-wrap bg-white">
    <div class="col-12 col-sm-9 col-md9 row nomar nopad">
        <div class="col-6 pad-l0">
            <label>FIRST NAME</label>
            <input type="text" class="form-control font-12" value="Ranjan" disabled />
        </div>
        <div class="col-6 pad-l0">
            <label>LAST NAME</label>
            <input type="text" class="form-control font-12" value="Ranjan" disabled />
        </div>
        <div class="col-12 mar-b20"></div>
        <div class="col-6 pad-l0">
            <label>EMAIL ADDRESS</label>
            <input type="text" class="form-control font-12" value="ranjan.thangjam@gmail.com" disabled />
        </div>
        <div class="col-6 pad-l0">
            <label>POSTAL CODE</label>
            <input type="text" class="form-control font-12" value="179094" disabled />
        </div>
        <div class="col-12 mar-b20"></div>
        <div class="col-12 pad-l0">
            <label>PRIMARY ADDRESS</label>
            <textarea class="form-control font-12" disabled>High Street Center, #17-02, 1 North Bridge Road.</textarea>
        </div>
    </div>
    <div class="col-12 col-sm-3 col-md-3 pad-r0 xs-nopad">
        <button class="btn btn-btm info-visible mar-btm" data-toggle="modal" data-target="#cancel-item-modal">Delete</button>
        <button class="btn btn-btm info-visible" onclick="editSection(this)">Edit</button>
        <button class="btn hidden btn-btm edit-visible mar-btm" onclick="cancelEditSection(this)">Cancel</button>
        <button class="btn hidden btn-btm edit-visible">Save</button>
    </div>
</div>
<?php } ?>
@stop   