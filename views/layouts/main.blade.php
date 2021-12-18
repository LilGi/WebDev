<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>


    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">



    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style type="text/css" >
        .container { max-width: 1200px }

        .dataTables_length{
            padding-bottom: 5px;
            padding-top: 5px;
        }

        .dataTables_filter{
            padding-bottom: 5px;
            padding-top: 5px;
        }


    </style>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#example').DataTable( {
                responsive: true,
            } );
        } );

    </script>



</head>
<body>
@include('user.users-dashboard')
@yield('content')


<form method="post" id="logout" action="{{route('logout')}}">
    @csrf


</form>

{{--<script src="https://code.jquery.com/jquery-3.5.1.js"></script>--}}
{{--<script  src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>--}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

@yield('qr-script')

{{--<script>--}}
    {{--$(document).ready( function () {--}}
        {{--$('#example').DataTable()--}}
    {{--} );--}}
{{--</script>--}}
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