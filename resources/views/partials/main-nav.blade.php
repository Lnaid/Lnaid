 <!-- ##### Header Area Start ##### -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="banner">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><span><img src="{{ asset('assets/img/core-img/logo.png') }}" alt="logo"></span> Lnaid</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    
                   <!--  <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                    @if(Auth::check())
                    <li class="lh-55px"><a href="{{ route('dashboard') }}" class="btn login-btn ml-50">Dashboard!</a></li>
                    @else
                    <li class="lh-55px"><a href="{{ route('login') }}" class="btn login-btn ml-50">Login!</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- ##### Header Area End ##### -->