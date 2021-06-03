<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
@yield('title')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Devj's Blog">
<link rel="icon" href="{{ asset('') }}/devJ__2_brand_usage__7_created_by_logaster__1_-removebg-preview1.png"  type="image/png"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/styles') }}/bootstrap4/bootstrap.min.css">
<link href="{{ asset('/blog/plugins') }}/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/plugins') }}/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/plugins') }}/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/plugins') }}/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/plugins') }}/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/styles') }}/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{ asset('/blog/styles') }}/responsive.css">
@yield('style')
</head>
<body>

<div class="super_container">

  <!-- Header -->

  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="header_content d-flex flex-row align-items-center justify-content-start">
            <div class="logo"><a href="#">DEVj</a></div>
            <nav class="main_nav">
              <ul>
                @foreach ($categorys as $category)
                  <li><a href="/">{{ $category->name }}</a></li>
                @endforeach
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <!-- <li><a href="{{ route('register') }}">Register</a></li> -->
                @else
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        
                        @if (Auth::user()->level == 1)
                          Hi: {{ Auth::user()->name }} Admin
                        @elseif (Auth::user()->level == 2)
                          Hi: {{ Auth::user()->name }} Thành viên
                        @elseif (Auth::user()->level == 3)
                          Hi: {{ Auth::user()->name }} Quản trị
                        @endif
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/home" style="color:black;">Trang Admin</a>
                      </div>
                    </li>

                @endif
              </ul>
            </nav>
            <div class="search_container ml-auto">
              <!-- <div class="weather">
                <div class="temperature">+10°</div>
                <img class="weather_icon" src="{{ asset('/blog/images') }}/cloud.png" alt="">
              </div> -->
              <form action="#">
                <input type="search" class="header_search_input" required="required" placeholder="Tìm ...">
                <img class="header_search_icon" src="{{ asset('/blog/images') }}/search.png" alt="">
              </form>
              
            </div>
            <div class="hamburger ml-auto menu_mm">
              <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Menu -->

  <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
    <div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
    <div class="logo menu_mm"><a href="#">DEVj</a></div>
    <div class="search">
      <form action="#">
        <input type="search" class="header_search_input menu_mm" required="required" placeholder="Type to Search...">
        <img class="header_search_icon menu_mm" src="{{ asset('/blog/images') }}/search_2.png" alt="">
      </form>
    </div>
    <nav class="menu_nav">
      <ul class="menu_mm">
        @foreach ($categorys as $category)
          <li class="menu_mm"><a href="/">{{ $category->name }}</a></li>
        @endforeach
        <li class="menu_mm"><a href="contact.html">Liên hệ</a></li>
      </ul>
    </nav>
  </div>
  
  <!-- Home -->
  <div class="home" style="height: 500px;">
    
    <!-- Home Slider -->
    @yield('home-slide')
  </div>
  <!-- Page Content -->

  <div class="page_content">
    <div class="container">
      <div class="row row-lg-eq-height">

        <!-- Main Content -->

        <div class="col-lg-9">
          @yield('main-content')
        </div>

        <!-- Sidebar -->

        <div class="col-lg-3">
          <div class="sidebar">
            <div class="sidebar_background"></div>

            <!-- Top Stories -->
            @yield('top-stories')
            <!-- Advertising -->
            @yield('advertising')
            <!-- Newest Videos -->
            @yield('newest-video')
            <!-- Advertising 2 -->
            @yield('advertising-2')
            <!-- Future Events -->
            @yield('future-events')
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer -->

  <footer class="footer">
    <div class="container">
      <div class="row row-lg-eq-height">
        <div class="col-lg-9 order-lg-1 order-2">
          <div class="footer_content">
            <div class="footer_logo"><a href="#"></a></div>
            <div class="footer_social">
              <ul>
                <li class="footer_social_facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="footer_social_twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li class="footer_social_pinterest"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li class="footer_social_vimeo"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                <li class="footer_social_instagram"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li class="footer_social_google"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="copyright">Design & Development with <i class="fa fa-heart-o" style="color:red;"></i> by <a href="https://colorlib.com" target="_blank">DEVj</a></div>
          </div>
        </div>
        <div class="col-lg-3 order-lg-2 order-1">
          <div class="subscribe">
            <div class="subscribe_background"></div>
            <div class="subscribe_content">
              <div class="subscribe_title">Đăng ký</div>
              <form action="#">
                <input type="email" class="sub_input" placeholder="Email của bạn? " required="required">
                <button class="sub_button">
                  <svg version="1.1" id="link_arrow_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="19px" height="13px" viewBox="0 0 19 13" enable-background="new 0 0 19 13" xml:space="preserve">
                    <polygon fill="#FFFFFF" points="12.475,0 11.061,0 17.081,6.021 0,6.021 0,7.021 17.038,7.021 11.06,13 12.474,13 18.974,6.5 "/>
                  </svg>
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>


<script src="{{ asset('/blog/js') }}/jquery-3.2.1.min.js"></script>
<script src="{{ asset('/blog/styles') }}/bootstrap4/popper.js"></script>
<script src="{{ asset('/blog/styles') }}/bootstrap4/bootstrap.min.js"></script>
<script src="{{ asset('/blog/plugins') }}/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{ asset('/blog/plugins') }}/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js"></script>
<script src="{{ asset('/blog/plugins') }}/easing/easing.js"></script>
<script src="{{ asset('/blog/plugins') }}/masonry/masonry.js"></script>
<script src="{{ asset('/blog/plugins') }}/masonry/images_loaded.js"></script>
<script src="{{ asset('/blog/js') }}/custom.js"></script>
@yield('script')
</body>
</html>