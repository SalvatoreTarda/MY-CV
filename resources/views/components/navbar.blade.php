  <div class="container-fluid d-flex my-3 mx-5">
      <div class="row">
          <div class="col-12 col-md-3 mx-5">
              <nav id="navbar" class="navbar bg-bl fixed-top ">
                  <a class="navbar-brand text-w nav-link mx-5" href="{{ route('welcome') }}">Salvatore Tarda</a>
                  <button class="navbar-toggler btn" type="button" data-bs-toggle="collapse"
                      data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                      aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon "></span>
                  </button>
                  <div class="collapse mx-5 navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                          <a class="nav-link " aria-current="page" href="{{ route('welcome') }}">Home</a>
                          <a class="nav-link " href="{{ route('Bio') }}">Bio</a>
                          <a class="nav-link " href="{{ route('WebDeveloper') }}">Web Developer</a>
                          <a class="nav-link " href="{{ route('GraficDesign') }}">Grafica</a>
                            
                      </div>

                      
                  </div>
              </nav>
          </div>
      </div>
  </div>
