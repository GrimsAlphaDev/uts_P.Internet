<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    UTS - M Haikal Alfandi
  </title>



  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- CSS Files -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link id="pagestyle" href="{{ asset('style/css/style.css') }}" rel="stylesheet" />

</head>

<body class="index-page bg-gray-200">


  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav
          class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid px-0">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="/">
              UTS
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-auto">

                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" href="/anggota">
                    <i class="material-icons opacity-6 me-2 text-md">home</i>
                       Anggota 
                    </i>
                  </a>
                  </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

  <header class="header-2">
    <div class="page-header min-vh-75 relative addbg" style="">
      <span class="mask bg-gradient-primary opacity-4"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">@yield('jumbotron')</h1>
            <p class="lead text-white mt-3">@yield('subtext')</p>
          </div>
        </div>
      </div>
    </div>
  </header>
<div class="container">
  <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

      @yield('content')

    {{-- Footer --}}

    <footer>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright ©
              <script>document.write(new Date().getFullYear())</script> By <a
                href="https://github.com/GrimsAlphaDev" target="_blank">Mochammad Haikal Alfandi Subagyo</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--   Core JS Files   -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>