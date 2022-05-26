<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="{{ asset('favicon.jpg') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('main.css') }}" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSRF Token -->

  <title>الزهور لشرقية</title>
 </head>
 <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow p-7 mb-4">
          <div class="container-fluid">
            <a class="navbar-brand">
              <img class="img-thumbnail d-inline-block align-top" src="storage/photos/shopLogo/flower.jpg" alt="Brand-image" width="35" height="35">
              <strong>مؤسسة الزهور لشرقية</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a  class="nav-link" aria-current="page" href="{{ url('/') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ url('/store') }}"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Store</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page"  href="{{ url('/contact') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> Contact Us / Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"  href="{{ url('/gallery') }}"><i class="fa fa-photo" aria-hidden="true"></i> Gallery</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" aria-current="page"  href="{{ url('/acrylic') }}"><i class="fa fa-photo" aria-hidden="true"></i> Acrylic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"  href="{{ url('/foam') }}"><i class="fa fa-photo" aria-hidden="true"></i> Foam</a>
                </li> --}}


                <li class="nav-item">
                  <a class="nav-link" target=”_blank” href="https://www.instagram.com/alzohoor_alsharkia/"><i class="fa fa-instagram"></i>&nbsp;Instagram</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
        <main>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <img class="img-fluid" style="margin-top:5px" src="storage/photos/shopLogo/shopLong.jpg" alt="Brand-image">

            </div>
              <hr style="padding-top:5px; margin-top:10px; margin-bottom:35px" >
            </div>
          </div>

         @yield('content')


        </main>
 </body>
</html>
