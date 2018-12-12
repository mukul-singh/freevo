@extends('profile')
@section('content')
<div class="col-12 row box-wrap bg-white">
    <div class="col-3 pad-l0">
        <b>PHOTO</b>
        <img src="{{ BASE_URL }}assets/images/single1.png" class="img-fluid">
        <span class="pointer font-12">Change my photo</span>
    </div>
    <div class="col-9 row nomar nopad">
        <div class="col-6 pad-r0">
            <label>FIRST NAME</label>
            <input type="text" class="form-control font-12" value="Ranjan" disabled />
        </div>
        <div class="col-6 pad-r0">
            <label>LAST NAME</label>
            <input type="text" class="form-control font-12" value="Ranjan" disabled />
        </div>
        <div class="col-12 mar-b20"></div>
        <div class="col-6 pad-r0">
            <label>MOBILE NUNMBER</label>
            <input type="text" class="form-control font-12" value="9473648593" disabled />
        </div>
        <div class="col-6 pad-r0">
            <label>ALTERNATE NUMBER</label>
            <input type="text" class="form-control font-12" value="9564738394" disabled />
        </div>
        <div class="col-12 mar-b20"></div>
        <div class="col-6 pad-r0">
            <label>EMAIL ADDRESS</label>
            <input type="text" class="form-control font-12" value="ranjan.thangjam@gmail.com" disabled />
        </div>
        <div class="col-6 pad-r0">
            <label>POSTAL CODE</label>
            <input type="text" class="form-control font-12" value="179094" disabled />
        </div>
        <div class="col-12 mar-b20"></div>
        <div class="col-12 pad-r0">
            <label>PRIMARY ADDRESS</label>
            <textarea class="form-control font-12" disabled>High Street Center, #17-02, 1 North Bridge Road.</textarea>
        </div>
        <div class="col-12 mar-b20"></div>
        <div class="col-12 nopad text-right">
            <button class="btn hidden edit-visible" onclick="cancelEditProfile()">Cancel</button>
            <button class="btn hidden edit-visible">Save Profile</button>
            <button class="btn info-visible" onclick="editProfile()">Edit Profile</button>
        </div>
    </div>
</div>
@stop   