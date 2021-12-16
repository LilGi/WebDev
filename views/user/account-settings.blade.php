@extends('layouts.main')

@section('content')

    <div class="wrapper mt-sm-5">
        <h4 class="pb-4 border-bottom">Account Settings</h4>
        <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
            <div class="pl-sm- pl-2" id="img-section"> <b>Profile Photo</b>
                <p>Accepted file type .png. Less than 1MB</p> <button class="btn"><b>Upload</b></button>
            </div>
        </div>
        <div class="py-2">
            <h4 style="font-size: revert">Name</h4>
            <div class="row py-2">
                <div class="col-md-6">
                    <input type="text" class="bg-light form-control" value="{{ Auth::user()->name }}">
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                    <input type="text" class="bg-light form-control"  value="{{ Auth::user()->lname }}">
                </div>
            </div>
            <br>
            <h4 style="font-size: revert">Current Address</h4>
            <div class="row py-2">
                <div class="col-md">
                    <input type="text" class="bg-light form-control" placeholder="Barangay">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md">
                    <input type="text" class="bg-light form-control" placeholder="City/Municipality">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md">
                    <!-- <label for="address">Province</label> -->
                    <input type="text" class="bg-light form-control" placeholder="Province">
                </div>
            </div>
            <br>
            <h4 style="font-size: revert">Contact Information</h4>
            <div class="row py-2">
                <div class="col-md">
                    <input type="text" class="bg-light form-control" value="{{ Auth::user()->email }}">
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md">
                <!-- {{--<label for="phone">Phone number</label>--}} -->
                    <input type="tel" class="bg-light form-control" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" value="{{ Auth::user()->phonenumber }}">
                </div>
            </div>
            <br>
            <h4 style="font-size: revert">Role</h4>
            <div class="row py-2">
                <div class="col-md">

                    <div class="arrow">
                        <select name="role" id="role" class="bg-light" onchange='Roles(this.value);'>
                            <option value="curent" disabled selected >Select current role</option>
                            <option value="student">Student</option>
                            <option value="teacher">Teacher</option>
                            <option value="visitor">Visitor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md">
                <!-- {{--<label for="idnumber"><span class="clue"></span></label>--}} -->
                    <input type="text" name="student" id="idnumber" class="bg light form-control"  style='display:none;' placeholder="Please fill this field" >
                </div>
            </div>
            <div class="py-3 pb-4 border-bottom">
                <button class="btn btn-primary mr-3">Save Changes</button>
                <button class="btn"><b>Cancel</b></button>
            </div>
            <div class="d-sm-flex align-items-center pt-3" id="deactivate">
                <div> <b>Request for account deletion</b>
                    <p>Details about your account and password</p>
                </div>
                <div class="ml-auto">
                    <button class="btn danger ">Delete Account</button>
                </div>
            </div>
        </div>
    </div>
@endsection