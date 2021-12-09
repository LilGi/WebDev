<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">

    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<form method="post" id="logout" action="{{route('logout')}}">
    @csrf
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgba(12, 163, 223, 0.8)">
        <a class="navbar-brand" href="#"><b style="font-size: xx-large;">T<span style="color: #21eb6e;">PORTAL</span></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link " href="{{route('home')}}"><i class="fas fa-home pr-2"></i>Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('qr')}}"><i class="fas fa-qrcode pr-2"></i>QR code</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#"><i class="fa fa-history pr-2"></i>Logs</a>
                </li>
            </ul>
            <ul class="navbar-nav">

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-lock pr-2"></i>Change password</a></li>
                        <li><a class="dropdown-item" href="{{route('account-settings')}}"><i class="fas fa-user-cog pr-2"></i>Account Settings</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#" onclick="myFunction()"><i class="fas fa-sign-out-alt pr-2"></i>Log out</a></li>
                    </ul>
                </li>
            </ul>
            <img src="{{asset('img/1.png')}}" width="30" height="30" style="border-radius: 30px" alt="" class="userpic">
        </div>
    </nav>


        @yield('content')
    {{--<x-app-layout>--}}
    {{--<x-slot name="header">--}}
    {{--<h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--{{ __('Dashboard') }}--}}
    {{--</h2>--}}
    {{--</x-slot>--}}

    {{--<div class="py-12">--}}
    {{--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
    {{--<div class="p-6 bg-white border-b border-gray-200">--}}
    {{--You're logged in!--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</x-app-layout>--}}

    {{--<div class="modal-footer bg-light">--}}
    {{--<button type="button" class="btn" data-dismiss="modal">Cancel</button>--}}
    {{--<button type="submit" class="btn btn-warning-flat">Log-out</button>--}}
    {{--</div>--}}
</form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
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
    QR_CODE.makeCode("tumang");
</script>
<script src="{{asset('js/qrcode.js')}}"></script>

<script>
    function myFunction() {
        document.getElementById("logout").submit();
    }
</script>

</body>
</html>


{{--<x-app-layout>--}}
{{--<x-slot name="header">--}}
{{--<h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--{{ __('Dashboard') }}--}}
{{--</h2>--}}
{{--</x-slot>--}}

{{--<div class="py-12">--}}
{{--<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--<div class="p-6 bg-white border-b border-gray-200">--}}
{{--You're logged in!--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</x-app-layout>--}}