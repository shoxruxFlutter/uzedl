@php
    use Illuminate\Support\Facades\Auth;
@endphp
<div class="py-2 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9 d-none d-lg-block">
                <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
                <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> +998 91 299 84 48</a>
                <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> anvarnurmuratov2023@gmail.com</a>
            </div>
            @if(Auth::check())
            <a href="{{ route('user.logout') }}" class="small btn btn-primary px-4 py-2 rounded-0 mystyle"><span
                       ></span> Logout</a>
            @else
            <div class="col-lg-3 text-right">
                <a href="{{ route('user.login') }}" class="small mr-3"><span class="icon-unlock-alt"></span> Log In</a>
                <a href="{{ route('user.registration') }}" class="small btn btn-primary px-4 py-2 rounded-0"><span
                        class="icon-users"></span> Register</a>
            </div>
            @endif
        </div>
    </div>
</div>

<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="d-flex align-items-center">
            <div class="site-logo">
                <a href="{{ route('home') }}" class="d-block">
                   UZEDL
                </a>
            </div>
            <div class="mr-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li class="active">
                            <a href="{{ route('home') }}" class="nav-link text-left">Home</a>
                        </li>
                        <li class="has-children">
                            <a href="about.html" class="nav-link text-left">About Us</a>
                            <ul class="dropdown">
                                <li><a href="teachers.html">Our Teachers</a></li>
                                <li><a href="about.html">Our School</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="admissions.html" class="nav-link text-left">Admissions</a>
                        </li>
                        <li>
                            <a href="{{ route('courses') }}" class="nav-link text-left">Courses</a>
                        </li>
                        <li>
                            <a href="contact.html" class="nav-link text-left">Contact</a>
                        </li>
                    </ul>
                    </ul>
                </nav>

            </div>
            <div class="ml-auto">
                <div class="social-wrap">
                    <a href="#"><span class="icon-facebook"></span></a>
                    <a href="#"><span class="icon-twitter"></span></a>
                    <a href="#"><span class="icon-linkedin"></span></a>

                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                            class="icon-menu h3"></span></a>
                </div>
            </div>

        </div>
    </div>

</header>

