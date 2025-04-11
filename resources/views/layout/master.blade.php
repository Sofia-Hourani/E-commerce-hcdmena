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
        <div class="navbar-brand"><img style="width:60%" class="img-fluid w-10 h-10 object-fit-cover" src="{{ asset('storage/uploads/image/logo.png') }}" alt="..." />
        </div>
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
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="dropdown-item" type="submit">Log Out</button>
                    </form>

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
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                        </svg>
                        <b>Jordan Address:</b>
                           <small>
                               Meca street st. Al Harraneh Building, Amman, Jordan
                               Second floor, office 203
                           </small>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                        </svg>
                        <b>Phone:</b>
                        <small>
                            +962 78 688 7858
                        </small>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/>
                            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/>
                        </svg>
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
