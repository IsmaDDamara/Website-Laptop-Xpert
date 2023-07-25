<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
  <title>@yield('title', 'LaptopXpert')</title>
</head>
<body>
  <nav class="navbar fixed-top navbar-expand-md bg-body-tertiary" style="background-color: whitesmoke;">
  <div class="container-xl">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('/img/logo.png') }}" alt="Logo" width="60px">
      <a class="navbar-brand" href="{{ route('home.index') }}" style="color: black">LaptopXpert</a>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}" style="font-weight:400">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home.about') }}" style="font-weight:400">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ route('product.index') }}" role="button" data-toggle="dropdown" aria-expanded="false" style="font-weight:400">Product</a>
          <ul class="dropdown-menu" style="font-weight:400">
            <li><a href="{{ route('product.laptop') }}">Laptop</a></li>
            <li><a href="{{ route('product.pc') }}">Pc</a></li>
            <li><a href="{{ route('product.processor') }}">Processor</a></li>
            <li><a href="{{ route('product.gaming') }}">Gaming</a></li>
            <li><a href="{{ route('product.audio') }}">Audio</a></li>
            <li><a href="{{ route('product.accessories') }}">Accessories</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('cart.index') }}" style="font-weight:400">Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbar-img" data-toggle="dropdown" role="button" aria-expanded="false" style="font-weight:400">
            Account 
            <img src="{{ asset('/img/profile.png') }}" class="img-circle" alt="Profile Image" />
          </a>
          <ul class="dropdown-menu">
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            @else
            @if(auth()->user()->isAdmin())
            @endif
            <form id="logout" action="{{ route('logout') }}" method="POST">
              <li><a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders</a></li>
              <li>
                <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">Logout</a>
                @csrf
              </li>
            </form>
            <li><a href="{{ route('admin.home.index') }}">Admin</a></li>
            @endguest
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- header -->
  <div class="container my-4">
    @yield('content')
  </div>

  <div class="line my-4">
    <hr>
    </div>
  </div>

  <div class="container my-4">
    @yield('contentpromo')
  </div>


  <div class="container my-4">
    @yield('content2')
  </div>

  <!-- footer -->
  <div class="copyright py-4 text-center text-white">
    <div class="container">
    <div class="row address-main">
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
          <div class="add-icon"><img src="{{ asset('/img/logo.png') }}" ></div>
          <div class="add-content">
            <h5>Address</h5>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut veniam </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
          <div class="add-icon">
            <img src="{{ asset('/img/logo.png') }}" alt="" />
          </div>
          <div class="add-content">
            <h5>Phone</h5><p>+(62) 85226718250 <br />+(62) 85228100156  </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
          <div class="add-icon"><img src="{{ asset('/img/logo.png') }}" alt="" /></div>
          <div class="add-content"><h5>Email</h5>
            <p> <a href="mailto:" style="text-decoration:none">ismadiandamara18@gmail.com</a> </p>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Copyright Footer -->
<footer class="bg-dark text-center text-white">
<!-- Grid container -->
<div class="container p-4 pb-0">
  <!-- Section: Social media -->
  <section class="mb-4">
    <!-- Facebook -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/isma.d.damara" role="button"><i class="fa fa-facebook-f"></i></a>

    <!-- Twitter -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-twitter"></i></a>

    <!-- Google -->
    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fa fa-google"></i></a>

    <!-- Instagram -->
    <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/isma_d_damara" role="button"><i class="fa fa-instagram"></i></a>
  </section>
  <!-- Section: Social media -->
</div>
  </div>
  <!-- footer -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('/js/produk.js') }}"></script>
</body>
</html>
