<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="consulting , recruitment , training" />
    <meta name="author" content="" />

    <title>hcdmena</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="/public/assets/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid" style="background-color: rgba(0, 0, 0, 0.05);">
        <a class="navbar-brand" href="">HCDMENA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.courses')}}">Courses</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="nav-link dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Our Service
                        </button>
                        <div class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="">Recruitment</a>
                            <a class="dropdown-item" href=""> System Development</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="dropdown">
                <button class="nav-link dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                </button>
                <div class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                    <a class="dropdown-item" href="{{ route('login') }}">Log In</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Product Section -->
<section class="py-5">
    <div class="container">
        @yield('content')
    </div>
</section>

<!-- Footer -->
<footer class="bg-body-tertiary text-center text-lg-start ">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">HCDMENA</h4>
                <p>
                    HCDMena we are a UK company with a Branch in Jordan , Egypt , Iraq and Turkey. HCDMena is a boutique house specializing in Human Capital Development, Consultancy Services and Systems Development.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h4 class="text-uppercase">Contact</h4>
                <ul class="list-unstyled mb-0">
                    <li>
                        <b>Jordan Address:</b>
                           <small>
                               Meca street st. Al Harraneh Building, Amman, Jordan
                               Second floor, office 203
                           </small>
                    </li>
                    <li>
                        <b>Phone:</b>
                        <small>
                            +962 78 688 7858
                        </small>
                    </li>
                    <li>
                        <b>Email:</b>
                        <small>
                            info@hcdmena.com
                        </small>
                    </li>
                </ul>
            </div>
        </div>
          <div class="text-center mt-2">
              <a href="https://www.facebook.com/HCDmena" class="text-black" aria-label="Facebook" target="_blank">
                  <i aria-hidden="true" class="fab fa-facebook-f mx-2"></i>
              </a>
              <a href="https://www.instagram.com/hcdmena.jo/?igshid=YmMyMTA2M2Y%3D" aria-label="Instagram" class="instagram1 text-black" target="_blank">
                  <i class="fab fa-instagram mx-2"></i>
              </a>
              <a href="https://www.linkedin.com/company/hcdmena/?originalSubdomain=jo" aria-label="linkedin" class="linkedin text-black" target="_blank">
                  <i class="fab fa-linkedin-in mx-2"></i>
              </a>
              <a href="https://hcdmena.com/" aria-label="google" class="linkedin text-black" target="_blank">
                  <i class="fab fa-google mx-2"></i>
              </a>
              <a href="https://wa.me/962786887858" aria-label="google" class="linkedin text-black" target="_blank">
                  <i class="fab fa-whatsapp"></i>
              </a>

          </div>

    </div>
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2025 Copyright:
        <a class="text-body" href="{{route('app.index')}}">HCDMena.com</a>
    </div>
    <!-- Copyright -->
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
