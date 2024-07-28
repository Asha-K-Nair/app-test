<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eKART</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div> -->
        <!--Main Navigation-->
<header>
  <!-- Jumbotron -->
  <div class="p-3 text-center bg-white border-bottom">
    <div class="container">
      <div class="row gy-3">
        <!-- Left elements -->
        <div class="col-lg-2 col-sm-4 col-4">
          <a href="" target="_blank" class="float-start">
            <img src="https://gumlet-images.assettype.com/afaqs/2022-08/69acc390-3578-4527-8355-9f443f4749e3/Ekar.jpg" height="35" />
          </a>
        </div>
        <!-- Left elements -->

        <!-- Center elements -->
        <div class="order-lg-last col-lg-5 col-sm-8 col-8">
          <div class="d-flex float-end">
          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
        </div>
        <!-- Center elements -->

        <!-- Right elements -->
        <div class="col-lg-5 col-md-12 col-12">
          <div class="input-group float-center">
            <!-- <div class="form-outline">
              <input type="search" id="form1" class="form-control" />
              <label class="form-label" for="form1">Search</label>
            </div>
            <button type="button" class="btn btn-primary shadow-0">
              <i class="fas fa-search"></i>
            </button> -->
          </div>
        </div>
        <!-- Right elements -->
      </div>
    </div>
  </div>
  <!-- Jumbotron -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5;">
    <!-- Container wrapper -->
    <div class="container justify-content-center justify-content-md-between">
      <!-- Toggle button -->
      <button
              class="navbar-toggler border text-dark py-2"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarLeftAlignExample"
              aria-controls="navbarLeftAlignExample"
              aria-expanded="false"
              aria-label="Toggle navigation"
              >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Hot offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Gift boxes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Menu item</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Menu name</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark mb-0" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              Others
            </a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#">Action</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another action</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- Left links -->
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
</header>

<!-- intro -->
<section class="pt-3">
  <div class="container">
    <div class="row gx-3">
      <main class="col-lg-9">
        <div class="card-banner p-5 bg-primary rounded-5" style="height: 350px;">
          <div style="max-width: 500px;">
            <h2 class="text-white">
              Great products with <br />
              best deals
            </h2>
            <p class="text-white">No matter how far along you are in your sophistication as an amateur astronomer, there is always one.</p>
            <a href="#" class="btn btn-light shadow-0 text-primary"> View more </a>
          </div>
        </div>
      </main>
      <aside class="col-lg-3">
        <div class="card-banner h-100 rounded-5" style="background-color: #f87217;">
          <div class="card-body text-center pb-5">
            <h5 class="pt-5 text-white">Amazing Gifts</h5>
            <p class="text-white">No matter how far along you are in your sophistication</p>
            <a href="#" class="btn btn-outline-light"> View more </a>
          </div>
        </div>
      </aside>
    </div>
    <!-- row //end -->
  </div>
  <!-- container end.// -->
</section>
<!-- intro -->

<!-- category -->
<section>
  <div class="container pt-5">
    <nav class="row gy-4">
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-couch fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Interior items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-basketball-ball fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Sport and travel</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-ring fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Jewellery</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-clock fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Accessories</div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-car-side fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Automobiles</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-home fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Home items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-guitar fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Musical items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-book fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Book, reading</div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-baby-carriage fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Kid's toys</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-paw fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Pet items</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-tshirt fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Men's clothing</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-shoe-prints fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Men's clothing</div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="row">
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-mobile fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Smartphones</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-tools fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Tools</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-pencil-ruler fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Education</div>
            </a>
          </div>
          <div class="col-3">
            <a href="#" class="text-center d-flex flex-column justify-content-center">
              <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                <i class="fas fa-warehouse fa-xl fa-fw"></i>
              </button>
              <div class="text-dark">Other items</div>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</section>
<!-- category -->

<!-- Products -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>New products</h3>
    </header>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge bg-danger pt-1">New</span></h6>
              </div>
            </div>
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/1.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-3">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">GoPro action camera 4K</p>
            <p class="text-muted">
              Model: X-200
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <div class="mask" style="height: 50px;">
              <div class="d-flex justify-content-start align-items-start h-100 m-2">
                <h6><span class="badge pt-1" style="background-color: #f87217;">Offer</span></h6>
              </div>
            </div>
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/2.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$590.00</h5>
            <p class="card-text mb-0">Canon EOS professional</p>
            <p class="text-muted">
              Capacity: 128GB
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/3.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Sizes: S, M, XL
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/4.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$1099.00</h5>
            <p class="card-text mb-0">Apple iPhone 13 Pro max</p>
            <p class="text-muted">
              Color: Black, Memory: 128GB
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/5.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Sizes: S, M, XL
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/6.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Model: X-200
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/7.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Sizes: S, M, XL
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/8.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Material: Jeans
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Products -->

<!-- Features -->
<section>
  <div class="container">
    <div class="card p-4 bg-primary">
      <div class="row align-items-center">
        <div class="col">
          <h4 class="mb-0 text-white">Best products and brands in store</h4>
          <p class="mb-0 text-white-50">Trendy products and text to build on the card title</p>
        </div>
        <div class="col-auto"><a class="btn btn-white text-primary shadow-0" href="#">Discover</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Features -->

<!-- Recommended -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>Recommended</h3>
    </header>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/9.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-3">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$17.00</h5>
            <p class="card-text mb-0">Blue jeans shorts for men</p>
            <p class="text-muted">
              Sizes: S, M, XL
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/10.webp" class="card-img-top rounded-2"style="aspect-ratio: 1 / 1" />
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$9.50</h5>
            <p class="card-text mb-0">Slim fit T-shirt for men</p>
            <p class="text-muted">
              Sizes: S, M, XL
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/11.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Sizes: S, M, XL
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card my-2 shadow-0">
          <a href="#" class="">
            <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/items/12.webp" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
          </a>
          <div class="card-body p-0 pt-2">
            <a href="#!" class="btn btn-light border px-2 pt-2 float-end icon-hover"><i class="fas fa-heart fa-lg px-1 text-secondary"></i></a>
            <h5 class="card-title">$29.95</h5>
            <p class="card-text mb-0">Modern product name here</p>
            <p class="text-muted">
              Material: Jeans
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Recommended -->

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    <div class="container">
      <div class="row d-flex">
        <!-- Left -->
        <div class="col-md-6 col-sm-12 mb-2 mb-md-0 d-flex justify-content-center justify-content-md-start">
          <div class="">
            <div class="input-group" style="max-width: 400px;">
              <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
              <button class="btn btn-light border" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                Subscribe
              </button>
            </div>
          </div>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="col-md-6 col-sm-12 float-center">
          <div class="float-md-end">
            <a class="btn btn-icon btn-light text-secondary px-3 border" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f fa-lg"></i></a>
            <a class="btn btn-icon btn-light text-secondary px-3 border" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram fa-lg"></i></a>
            <a class="btn btn-icon btn-light text-secondary px-3 border" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube fa-lg"></i></a>
            <a class="btn btn-icon btn-light text-secondary px-3 border" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter fa-lg"></i></a>
          </div>
        </div>
        <!-- Right -->
      </div>
    </div>
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5 mb-4">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-12 col-lg-3 col-sm-12">
          <!-- Content -->
          <a href="https://mdbootstrap.com/" target="_blank" class="ms-md-2">
            <img src="https://gumlet-images.assettype.com/afaqs/2022-08/69acc390-3578-4527-8355-9f443f4749e3/Ekar.jpg" height="35" />
          </a>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Store
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">About us</a></li>
            <li><a class="text-muted" href="#">Find store</a></li>
            <li><a class="text-muted" href="#">Categories</a></li>
            <li><a class="text-muted" href="#">Blogs</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Information
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">Help center</a></li>
            <li><a class="text-muted" href="#">Money refund</a></li>
            <li><a class="text-muted" href="#">Shipping info</a></li>
            <li><a class="text-muted" href="#">Refunds</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-6 col-sm-4 col-lg-2">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">
            Support
          </h6>
          <ul class="list-unstyled mb-4">
            <li><a class="text-muted" href="#">Help center</a></li>
            <li><a class="text-muted" href="#">Documents</a></li>
            <li><a class="text-muted" href="#">Account restore</a></li>
            <li><a class="text-muted" href="#">My orders</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-12 col-sm-12 col-lg-3">
          <!-- Links -->
          <h6 class="text-uppercase text-dark fw-bold mb-2">Our apps</h6>
          <a href="#" class="mb-2 d-inline-block"> <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/misc/btn-appstore.webp" height="38" /></a>
          <a href="#" class="mb-2 d-inline-block"> <img src="https://mdbootstrap.com/img/bootstrap-ecommerce/misc/btn-market.webp" height="38" /></a>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <div class="container">
    <div class="py-4 border-top">
      <div class="d-flex justify-content-between">
        <!--- payment --->
        <div class="text-dark">
          <i class="fab fa-lg fa-cc-visa"></i>
          <i class="fab fa-lg fa-cc-amex"></i>
          <i class="fab fa-lg fa-cc-mastercard"></i>
          <i class="fab fa-lg fa-cc-paypal"></i>
        </div>
        <!--- payment --->

        <!--- language selector --->
        <div class="dropdown dropup">
          <a class="dropdown-toggle text-dark" href="#" id="Dropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false"> <i class="flag-united-kingdom flag m-0"></i> English </a>

          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="Dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class="flag-united-kingdom flag"></i>English <i class="fa fa-check text-success ms-2"></i></a>
            </li>
            <li><hr class="dropdown-divider" /></li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
            </li>
          </ul>
        </div>
        <!--- language selector --->
      </div>
    </div>
  </div>
</footer>
<!-- Footer -->
    </body>
</html>
