@extends('layout.master')
@section('content')
      <section>
          <div class="row">
              <h1 class="display-3 fw-bold">We Help Businesses Grow Smart</h1>
              <p class="text-center p-3">With innovation, strategy, and tech-driven solutions tailored to your industry.</p>
                  <p> HCDMena is a boutique house specializing in
                      Human Capital Development, Consultancy Services and Systems Development.
                      HCDMena is considered a progressive enterprise that operates across a wide range of
                      industries. With our multidisciplinary innovative team, we create bold strategies and
                      solutions tailored to fit our clients' needs as we enable them to capitalize on opportunities.
                  </p>

          </div>
      </section>
      <div class="container p-4">
          <div class="row">
              <div class="text-center my-5">
                  <h3 class="text-secondary fw-semibold" style="font-size: 1.25rem;">We offer a wide range</h3>
                  <h2 class="fw-bold display-5">
                       <span style="color: #dc3545; border-bottom: 4px solid #dc3545; padding-bottom: 4px;">Of business services</span>
                  </h2>
              </div>

              <div class="col-md-6 p-0" style="background-color: #66656A;">
                  <img class="img-fluid w-100 h-100 object-fit-cover" src="{{ asset('storage/uploads/image/Hcdmena1.jpg') }}" alt="..." />
              </div>
              <div class="col-md-6" style="background-color: #66656A">
                  <div class="col-lg-6 col-md-6 mb-4 mb-md-0" >
                      <h1 class="display-7" style="color: #ef4444">Consult Your Business With Us</h1>
                      <p class="lead text-white">Whatever Your Needs Will Definitely Be Helped</p>
                  </div>
                  <div class="d-flex">
                      <div class="text-white mb-3">
                              <p>
                                  <i class='fas fa-angle-right' style='font-size:18px'></i>Free Sign Up Consultation
                              </p>
                              <p>
                                  <i class="fas fa-angle-right" style='font-size:18px'></i> Get Demo Session Online
                              </p>
                          <a href="{{route('register')}}" class="btn btn-dark btn-lg rounded-pill d-inline-flex align-items-center">
                              Sign Up Now
                          </a>
                      </div>

                  </div>
              </div>
          </div>
      </div>


@endsection
