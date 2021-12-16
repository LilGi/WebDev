<nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgba(12, 163, 223, 0.8)">
    <div class="container">
    <a class="navbar-brand" href="{{route('home')}}"><b style="font-size: xx-large;">T<span style="color: #21eb6e;">PORTAL</span></b></a>
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
                <a class="nav-link" href="{{route('users.index')}}"><i class="fa fa-list pr-2"></i>Registered list</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{route('own-logs')}}"><i class="fa fa-history pr-2"></i>UsersView Log</a>
            </li>
        </ul>
        <ul class="navbar-nav">

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('change-password')}}"><i class="fas fa-lock pr-2"></i>Change password</a></li>
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
    </div>
</nav>