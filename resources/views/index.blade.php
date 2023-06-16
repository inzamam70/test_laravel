<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Home page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" >
    <link rel="stylesheet" href="{{ asset('ui/admin/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-lg navber-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><span class="text-danger">Cumpus</span>Canteen</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              <li class="nav-item">
                <a class="nav-link" href="{{ url('index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('login') }}">Log In</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contact') }}">Contact Us</a>
              </li>

              <li class="nav-item">
                <form action="">
                  <div class="search-container">
                    <input type="text" placeholder="Search here.." class="search-input " >
                    <i class="fa-sharp fa-solid fa-magnifying-glass search-icon"></i>
                  </div>                
                </form>
              </li>
             
            </ul>
         
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('image/admin/carsol1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Best Quality Food</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/admin/cursol2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Well Dedication</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/admin/silder3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Testy & Jussy</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="{{asset('image/admin/about.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide Best Quality <br> Services Ever</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                        <a href="#" class="btn btn-warning">Learn More</a>

                    </div>
                </div>
            </div>
        </div>
      </section>
    
      <section id="productlist" class="productlist section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Product</h2>
                        <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>


                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/corn.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Corn</h3>
                    <p class="lead text-danger">10$</p>
                    <a href="{{ url('product-details') }}" class="btn bg-warning text-dark">See More</a>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/nasos.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Nasos</h3>
                    <p class="lead text-danger">20$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/salad.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Salad</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/rice.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Rice</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
            
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/fruits.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Fruits</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/donat.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Donat</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>      
          </div>
      </section>







      <footer class="bg-dark p-2 text-center fixed-bottom">
        <div class="container">
          <p class="text-white">All Right Reserved @Cumpas-Canteen </p>
        </div>
      </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" ></script>



</body>
</html>