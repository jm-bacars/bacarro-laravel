<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Business Casual - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="../../../landing-page/assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../landing-page/css/styles.css" rel="stylesheet" />
    </head>
    <body>a
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">“Coffee on the go, Coffee on the road”</span>
                <span class="site-heading-lower">Coffee Moto Shop</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Coffee Moto Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('welcome')}}">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('about')}}">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('products')}}">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{ route('store')}}">Store</a></li>
                    <li>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                      @csrf
                    <button type="submit" class="btn btn-danger ms-2">Logout</button>
                    </form>
                    </li>                    
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section about-heading">
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="../cafe.png" alt="..." />
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">COFFEE MOTO SHOP</span>
                                    <span class="section-heading-lower">ABOUT</span>
                                </h2>
                                <!-- Insert your image here -->
                                <style>
                                    .wood-frame {
                                      border: 0px solid #8B5A2B; /* dark wood brown */
                                      border-radius: 8px;
                                      box-shadow:
                                        0 0 0 5px #D2B48C,  /* lighter wood */
                                        5px 5px 15px rgba(0,0,0,0.6);
                                    }
                                  </style>
                                  
                                  <img src="../../../landing-page/assets/img/ako.jpg" alt="Coffee Icon" class="wood-frame" style="width: 90px; height: 90px; float: right; margin-top: -120px; margin-right: 0px;" />          
                                  <style>
                                    .highlight-brown {
                                      color: #8B5A2B;
                                      font-weight: bold;
                                      animation: pulseBrown 2s infinite;
                                    }
                                  
                                    @keyframes pulseBrown {
                                      0%, 100% {
                                        color: #8B5A2B;
                                        text-shadow: 0 0 5px #8B5A2B;
                                      }
                                      50% {
                                        color: #A0522D;
                                        text-shadow: 0 0 15px #A0522D;
                                      }
                                    }
                                  </style>
                                  
                                  <p>
                                    Founded in <span style="color: #8B5A2B; font-weight: bold;">2004</span> by 
                                    <span style="color: #8B5A2B; font-weight: bold;">Joseph Macbill C. Bacarro</span>, 
                                    our <span class="highlight-brown">Coffee Moto Shop</span> has been serving up bold brews sourced from artisan farmers in the heart of South and Central America. With a passion for both motorcycles and coffee, we’re dedicated to exploring the open road and discovering the best coffee to fuel your ride. Whether you're gearing up for an adventure or winding down after a long ride, we’re here to bring you the perfect blend every time.
                                  </p>
                                  
                                  
</p>
                                <p class="mb-0">
                                    We guarantee that you will fall in
                                    <em>lust</em>
                                    with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
