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
                <button class="btn btn-primary">Download</button>
            </div>
        </div>
    </div>
</div>
<table id="table_id" class="display" style="width: 100%;">
    <thead>
    <tr>
        <th>Column 1</th>
        <th>Column 2</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Row 1 Data 1</td>
        <td>Row 1 Data 2</td>
    </tr>
    <tr>
        <td>Row 2 Data 1</td>
        <td>Row 2 Data 2</td>
    </tr>
    </tbody>
</table>
@endsection

@section('qr-script')
    <script src="{{asset('js/qrcode.js')}}"></script>
    <script src="{{asset('js/qrcode.min.js')}}"></script>
    <script>
        var QR_CODE = new QRCode("qrcode", {
            width: 220,
            height: 220,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H,
        });
        QR_CODE.makeCode("ID NUMBER TO DETOY");
    </script>
@endsection