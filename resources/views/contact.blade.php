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
     <link rel="stylesheet" href="{{ asset('ui/admin/contact.css') }}"> 
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


      <section class="form mx-5 my-4 pt-5 ">
        <div class="container ">
            <div class="row d-flex justify-content-center">
               
                <div class="col-lg-7 px-5 pt-5 ">
                    <h1 class="font-weight-bold py-3 d-flex justify-content-center text-danger">Campus Canteen</h1>
                    <h4 class="d-flex justify-content-center">Contact Us</h4>
                    <form action="">

                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="email" placeholder="Email-Address" class="form-control my-2 p-2">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="email" placeholder="Email-Address" class="form-control my-2 p-2">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-3">
                              <textarea rows="3" required class="form-control" placeholder="Your Text Here.."></textarea>
                            </div>
                          </div>
                       
                          <button type="button" class="btn1 mt-3 mb-5">Send Now</button>
                       
                    </form>
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