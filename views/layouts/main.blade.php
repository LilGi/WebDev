<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">

    <title>Home</title>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script  src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        } );
    </script>

</head>
<body>
@include('layouts.users-dashboard')
@yield('content')


<form method="post" id="logout" action="{{route('logout')}}">
    @csrf


</form>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

@yield('qr-script')
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