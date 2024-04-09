  <div class="container-fluid d-flex my-3">
      <div class="row">
          <div class="col-12 col-md-3">
              <nav id="navbar" class="navbar bg-dark fixed-top ">
                  <a class="navbar-brand text-w nav-link" href="{{ route('welcome') }}">Salvatore Tarda</a>
                  <button class="navbar-toggler bg-t" type="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                      <span class="navbar-toggler-icon text-w"></span>
                  </button>
                  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                      data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both
                      scrolling & backdrop
                    </button>
                  <div class="offcanvas offcanvasCustom offcanvas-start" data-bs-scroll="true" tabindex="-1"
                      id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                      <div class="offcanvas-header">
                          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                              aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body">
                          <p>Try scrolling the rest of the page to see this option in action.</p>
                      </div>
                  </div>

                  {{-- <div class="offcanvas bg-dark offcanvas-end text-w" tabindex="-1" id="offcanvasNavbar"
                      aria-labelledby="offcanvasNavbarLabel">
                      <div class="offcanvas-header tex-w">
                          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Salvatore</h5>
                          <button type="button" class="btn-close nav-link text-w" data-bs-dismiss="offcanvas"
                              aria-label="Close"></button>
                      </div>
                      <div class="offcanvas-body offcanvas ">
                          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3 ">
                              <li class="nav-item">
                                  <a class="nav-link text-w" aria-current="page" href="{{ route('welcome') }}">Home</a>
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link text-w" href="{{ route('Bio') }}">Bio</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-w" href="{{ route('WebDeveloper') }}">Web Developer</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link text-w" href="{{ route('GraficDesign') }}">Grafica</a>
                              </li>
                          </ul>
                      </div>
                  </div> --}}
              </nav>
          </div>
      </div>
  </div>
