<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/home">
            <span class="fs-4">{{ Auth::user()->name ?? "Azure Travel"}}</span>
        </a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Bantuan</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Cek Order</a></li>
                <li class="nav-item"><a href="{{ Auth::user() ? '/logout' : '/login'}}" 
                    class="nav-link active" aria-current="page">{{ Auth::user() ? 'Logout' : 'Login'}}</a></li>
            </ul>
        </div>
    </div>
</nav>