@extends('layouts.main')

@section('content')

    <div class="wrapper mt-sm-5">
        <h4 class="pb-4 border-bottom">Change password</h4>

        <br>
        <h4 style="font-size: revert">Current password</h4>
        <div class="row py-2">
            <div class="col-md">
                <input type="text" class="bg-light form-control" placeholder="">
            </div>
        </div>
        <br>
        <h4 style="font-size: revert">New password</h4>
        <div class="row py-2">
            <div class="col-md">
                <input type="text" class="bg-light form-control" placeholder="">
            </div>
        </div>
        <br>
        <h4 style="font-size: revert">Confirm password</h4>
        <div class="row py-2">
            <div class="col-md">
                <input type="text" class="bg-light form-control" placeholder="">
            </div>
        </div>
        <br>


            <div class="py-2 d-flex justify-content-center border-bottom">
            </div>
            <div class="d-flex justify-content-center pt-3">

                <div class="pt-2">
                    <button class="btn btn-primary">Update password</button>
                </div>
            </div>
        </div>
    </div>

@endsection