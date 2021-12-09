@extends('layouts.main')

@section('content')

<div class="wrapper mt-sm-5">
    <h4 class="pb-4 border-bottom">QR code</h4>
    <div class="d-flex justify-content-center py-3">
        <div id="qrcode"></div>
    </div>
    <div class="py text-center">
        <h4 style=" color: #fff; font-weight: 400;" >{{ Auth::user()->name }}</h4>
        <div class="py-2 d-flex justify-content-center border-bottom">
        </div>
        <div class="d-flex justify-content-center pt-3">

            <div class="pt-2">
                <button class="btn btn-primary"onclick="">Download</button>
            </div>
        </div>
    </div>
</div>
@endsection