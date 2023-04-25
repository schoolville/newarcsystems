<div class="container-fluid" style="background: #022539; height: 22px;"></div>
<nav id="header" class="navbar navbar-expand-lg">
    <div class="container">
        <div class="logo">
            <a class="navbar-brand" href="/">
                <img src="{{asset('/uploads/settings/'.$settings->logo)}}" alt="logo" width="200">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-menu">
            <img src="{{ asset('home/images/menu.svg') }}" alt="" style="width: 38px">
        </button>

        <div class="collapse navbar-collapse" id="nav-menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">ArcSystems</a></li>
                <li class="nav-item"><a href="#revenue" class="nav-link">Revenue</a></li>
                <li class="nav-item"><a href="#collection" class="nav-link">Collection</a></li>
                <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                <li class="nav-item"><a href="#clients" class="nav-link">Clients</a></li>
                <li class="nav-item"><a href="#contacts" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
