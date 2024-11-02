<header class="header" id="header">
    <nav class="navbar container">
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
        <a href="{{route('get-home')}}" class="brand">
            <img src="{{asset('img/gulab-fabric-logo.png')}}" class="obj_fit_contain" alt="Gulab Fabric">
        </a>
        <div class="menu" id="menu">
            <ul class="menu-inner">
                <li class="menu-item"><a href="{{route('get-home')}}" class="menu-link menu_item {{ request()->routeIs('get-home') ? ' active' : '' }}">Home</a></li>
                <li class="menu-item"><a href="{{route('get-about')}}" class="menu-link menu_item {{ request()->routeIs('get-about') ? 'active' : ''}}">About Us</a></li>
                <li class="menu-item"><a href="{{route('get-services')}}" class="menu-link menu_item {{request()->routeIs('get-services') ? 'active' : ''}}">Services</a></li>
                <li class="menu-item"><a href="{{route('get-faq')}}" class="menu-link menu_item {{request()->routeIs('get-faq') ? 'active' : ''}}">FAQ</a></li>
                <li class="menu-item"><a href="{{route('get-contact')}}" class="menu-link menu_item {{request()->routeIs('get-contact') ? 'active' : ''}}">Contact Us</a></li>
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <div class="header-theme-btn">
                        <img src="{{asset('img/svg/dots.svg')}}" alt="">
                    </div>
                </button>
            </ul>
        </div>
    </nav>
</header>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
      <img src="{{asset('img/gulab-fabric-logo.png')}}" alt="">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </div>
    <div class="offcanvas-body">
        <div class="socail-link-wrap">
            <a href="" class="socail-link-item">
                <i class="fa-brands fa-facebook-f"></i>
                <h4>Facebook</h4>
            </a>
            <a href="" class="socail-link-item">
                <i class="fa-brands fa-instagram"></i>
                <h4>Instagram</h4>
            </a>
            <a href="" class="socail-link-item">
                <i class="fa-brands fa-x-twitter"></i>
                <h4>Twitter</h4>
            </a>
            <a href="" class="socail-link-item">
                <i class="fa-brands fa-youtube"></i>
                <h4>Youtube</h4>
            </a>
        </div>
    </div>
    <div class="offcanvas-footer">
        <h5 class="heading-h4">
            <a href="tel:18408412569" class="text-dark">+1 840 841 25 69</a>
        </h5>
        <a href="mailto:info@email.com" class="email">info@email.com</a>
    </div>
</div>
