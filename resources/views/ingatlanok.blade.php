<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TravelGo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">TravelGo</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('fooldal') }}" class="nav-item nav-link">Főoldal</a>
                                               
                        <a href="{{ route('ingatlanok') }}" class="nav-item nav-link">Szállások</a>

                        <a href="{{ route('kontakt') }}" class="nav-item nav-link">Kapcsolat</a>
                        
                    </div>
                    <style>
                      #avatar {
                          width: 50px; /* Az avatar szélessége */
                          height: 50px; /* Az avatar magassága */
                          border-radius: 50%; /* Kör alakú avatar */
                      }
                  </style>
                  @if (Auth::check())
                      <!-- Ha a felhasználó be van jelentkezve -->
                      <a href="{{ route('dashboard') }}" class="button">
                          <img src="img/avatar.png" alt="Profilkép" id="avatar">

                          
                      </a>
                  @else
                      <!-- Ha a felhasználó nincs bejelentkezve -->
                      <a href="{{ route('login') }}" class="button">
                          Bejelentkezés
                      </a>
                  @endif
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Szállások</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ route('fooldal') }}">Főoldal</a></li>
                            
                            <li class="breadcrumb-item text-body active" aria-current="page">Szállások</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                               
                            </div>
                           
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
        <!-- Search End -->

                
        
                
                
                         <!-- Property List Start -->
                         <div class="container-xxl py-5">
                          <div class="container">
                           <div class="row g-0 gx-5 align-items-end">
                            <div class="col-lg-6">
                             <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                              <h1 class="mb-3">Elérhető Szállások</h1>
                             </div>
                            </div>
                           
                           </div>
                           <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                             <div class="row g-4">
                              <!-- Property 1 -->
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal1">
                                  <img class="img-fluid" src="img/property-2.jpg" alt="Villa" />
                                 </a>
                        
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Kertes ház
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">30.000Ft/éj</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                        
                              <!-- Property 2 -->
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal2">
                                  <img class="img-fluid" src="img/property-3.jpg" alt="Office" />
                                 </a>
                        
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Kertes ház
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                        
                              <!-- Property 3 -->
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal3">
                                  <img class="img-fluid" src="img/property-4.jpg" alt="Building" />
                                 </a>
                        
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Kertes ház
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                        
                              <!-- Property 4 -->
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal4">
                                  <img class="img-fluid" src="img/property-5.jpg" alt="Home" />
                                 </a>
                                
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Kertes ház
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                        
                              <!-- Property 5 -->
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal5">
                                  <img class="img-fluid" src="img/property-6.jpg" alt="Shop" />
                                 </a>
                                
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Kertes ház
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                        
                              <!-- Property 6 -->
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal6">
                                  <img class="img-fluid" src="img/property-1.jpg" alt="Appartment" />
                                 </a>
                               
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                 Kertes ház
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal1">
                                   <img class="img-fluid" src="img/property-2.jpg" alt="Villa" />
                                  </a>
                         
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Villa
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">30.000Ft/éj</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 2 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal2">
                                   <img class="img-fluid" src="img/property-3.jpg" alt="Office" />
                                  </a>
                         
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Villa
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 3 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal3">
                                   <img class="img-fluid" src="img/property-4.jpg" alt="Building" />
                                  </a>
                         
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Villa
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 4 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal4">
                                   <img class="img-fluid" src="img/property-5.jpg" alt="Home" />
                                  </a>
                                 
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Villa
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 5 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal5">
                                   <img class="img-fluid" src="img/property-6.jpg" alt="Shop" />
                                  </a>
                                 
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Villa
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 6 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal6">
                                   <img class="img-fluid" src="img/property-1.jpg" alt="Appartment" />
                                  </a>
                                  
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Villa
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal1">
                                   <img class="img-fluid" src="img/property-2.jpg" alt="Villa" />
                                  </a>
                         
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Hotel
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">30.000Ft/éj</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 2 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal2">
                                   <img class="img-fluid" src="img/property-3.jpg" alt="Office" />
                                  </a>
                         
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Hotel
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 3 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal3">
                                   <img class="img-fluid" src="img/property-4.jpg" alt="Building" />
                                  </a>
                         
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Hotel
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 4 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal4">
                                   <img class="img-fluid" src="img/property-5.jpg" alt="Home" />
                                  </a>
                                  
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Hotel
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 5 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal5">
                                   <img class="img-fluid" src="img/property-6.jpg" alt="Shop" />
                                  </a>
                                  
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Hotel
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                         
                               <!-- Property 6 -->
                               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                 <div class="position-relative overflow-hidden">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#propertyModal6">
                                   <img class="img-fluid" src="img/property-1.jpg" alt="Appartment" />
                                  </a>
                                 
                                  <div
                                   class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                  >
                                   Hotel
                                  </div>
                                 </div>
                                 <div class="p-4 pb-0">
                                  <h5 class="text-primary mb-3">$12,345</h5>
                                  <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                  <p>
                                   <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                   York, USA
                                  </p>
                                 </div>
                                 <div class="d-flex border-top">
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                   Sqft</small
                                  >
                                  <small class="flex-fill text-center border-end py-2"
                                   ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                  >
                                  <small class="flex-fill text-center py-2"
                                   ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                  >
                                 </div>
                                </div>
                               </div>
                        
                              <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                         
                              </div>
                             </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                             <div class="row g-4">
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-1.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Sell
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Appartment
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-2.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Rent
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Villa
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-3.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Sell
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Office
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-4.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Rent
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Building
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-5.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Sell
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Home
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-6.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Rent
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Shop
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-12 text-center">
                               <a class="btn btn-primary py-3 px-5" href="#">Browse More Property</a>
                              </div>
                             </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                             <div class="row g-4">
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-1.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Sell
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Appartment
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-2.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Rent
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Villa
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-3.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Sell
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Office
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-4.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Rent
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Building
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-5.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Sell
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Home
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA
                                 </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                               <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                 <a href="#"><img class="img-fluid" src="img/property-6.jpg" alt="" /></a>
                                 <div
                                  class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                 >
                                  For Rent
                                 </div>
                                 <div
                                  class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                 >
                                  Shop
                                 </div>
                                </div>
                                <div class="p-4 pb-0">
                                 <h5 class="text-primary mb-3">$12,345</h5>
                                 <a class="d-block h5 mb-2" href="#">Golden Urban House For Sell</a>
                                 <p>
                                  <i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New
                                  York, USA </p>
                                </div>
                                <div class="d-flex border-top">
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-ruler-combined text-primary me-2"></i>1000
                                  Sqft</small
                                 >
                                 <small class="flex-fill text-center border-end py-2"
                                  ><i class="fa fa-bed text-primary me-2"></i>3 Bed</small
                                 >
                                 <small class="flex-fill text-center py-2"
                                  ><i class="fa fa-bath text-primary me-2"></i>2 Bath</small
                                 >
                                </div>
                               </div>
                              </div>
                              <div class="col-12 text-center">
                               <a class="btn btn-primary py-3 px-5" href="#">Browse More Property</a>
                              </div>
                             </div>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                         <!-- Modals -->
                         <div
                          class="modal fade"
                          id="propertyModal1"
                          tabindex="-1"
                          aria-labelledby="propertyModalLabel1"
                          aria-hidden="true"
                         >
                          <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="propertyModalLabel1">Villa Details</h5>
                             <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                             ></button>
                            </div>
                            <div class="modal-body">
                             <img src="img/property-2.jpg" alt="Villa Image" class="img-fluid mb-3" />
                             <p><strong>Price:</strong> $12,345</p>
                             <p><strong>Location:</strong> 123 Street, New York, USA</p>
                             <p><strong>Size:</strong> 1000 Sqft</p>
                             <p><strong>Bedrooms:</strong> 3</p>
                             <p><strong>Bathrooms:</strong> 2</p>
                             <p>
                              <strong>Description:</strong> A beautiful villa for rent in the heart of New
                              York City. This property offers a spacious living area, modern
                              amenities, and a convenient location.
                             </p>
                            </div>
                            <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                             </button>
                             <button type="button" class="btn btn-primary">Foglalás</button>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                         <div
                          class="modal fade"
                          id="propertyModal2"
                          tabindex="-1"
                          aria-labelledby="propertyModalLabel2"
                          aria-hidden="true"
                         >
                          <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="propertyModalLabel2">Office Details</h5>
                             <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                             ></button>
                            </div>
                            <div class="modal-body">
                             <img src="img/property-3.jpg" alt="Office Image" class="img-fluid mb-3" />
                             <p><strong>Price:</strong> $12,345</p>
                             <p><strong>Location:</strong> 123 Street, New York, USA</p>
                             <p><strong>Size:</strong> 1000 Sqft</p>
                             <p><strong>Bedrooms:</strong> 3</p>
                             <p><strong>Bathrooms:</strong> 2</p>
                             <p>
                              <strong>Description:</strong> A beautiful office for sale in the heart of
                              New York City. This property offers a spacious working area, modern
                              amenities, and a convenient location.
                             </p>
                            </div>
                            <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                             </button>
                             <button type="button" class="btn btn-primary">Foglalás</button>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                         <div
                          class="modal fade"
                          id="propertyModal3"
                          tabindex="-1"
                          aria-labelledby="propertyModalLabel3"
                          aria-hidden="true"
                         >
                          <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="propertyModalLabel3">Building Details</h5>
                             <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                             ></button>
                            </div>
                            <div class="modal-body">
                             <img
                              src="img/property-4.jpg"
                              alt="Building Image"
                              class="img-fluid mb-3"
                             />
                             <p><strong>Price:</strong> $12,345</p>
                             <p><strong>Location:</strong> 123 Street, New York, USA</p>
                             <p><strong>Size:</strong> 1000 Sqft</p>
                             <p><strong>Bedrooms:</strong> 3</p>
                             <p><strong>Bathrooms:</strong> 2</p>
                             <p>
                              <strong>Description:</strong> A beautiful building for rent in the heart of
                              New York City. This property offers a spacious area, modern amenities,
                              and a convenient location.
                             </p>
                            </div>
                            <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                             </button>
                             <button type="button" class="btn btn-primary">Foglalás</button>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                         <div
                          class="modal fade"
                          id="propertyModal4"
                          tabindex="-1"
                          aria-labelledby="propertyModalLabel4"
                          aria-hidden="true"
                         >
                          <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="propertyModalLabel4">Home Details</h5>
                             <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                             ></button>
                            </div>
                            <div class="modal-body">
                             <img src="img/property-5.jpg" alt="Home Image" class="img-fluid mb-3" />
                             <p><strong>Price:</strong> $12,345</p>
                             <p><strong>Location:</strong> 123 Street, New York, USA</p>
                             <p><strong>Size:</strong> 1000 Sqft</p>
                             <p><strong>Bedrooms:</strong> 3</p>
                             <p><strong>Bathrooms:</strong> 2</p>
                             <p>
                              <strong>Description:</strong> A beautiful home for sale in the heart of New
                              York City. This property offers a spacious living area, modern
                              amenities, and a convenient location.
                             </p>
                            </div>
                            <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                             </button>
                             <button type="button" class="btn btn-primary">Foglalás</button>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                         <div
                          class="modal fade"
                          id="propertyModal5"
                          tabindex="-1"
                          aria-labelledby="propertyModalLabel5"
                          aria-hidden="true"
                         >
                          <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="propertyModalLabel5">Shop Details</h5>
                             <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                             ></button>
                            </div>
                            <div class="modal-body">
                             <img src="img/property-6.jpg" alt="Shop Image" class="img-fluid mb-3" />
                             <p><strong>Price:</strong> $12,345</p>
                             <p><strong>Location:</strong> 123 Street, New York, USA</p>
                             <p><strong>Size:</strong> 1000 Sqft</p>
                             <p><strong>Bedrooms:</strong> 3</p>
                             <p><strong>Bathrooms:</strong> 2</p>
                             <p>
                              <strong>Description:</strong> A beautiful shop for rent in the heart of New
                              York City. This property offers a spacious area, modern amenities, and a
                              convenient location.
                             </p>
                            </div>
                            <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                             </button>
                             <button type="button" class="btn btn-primary">Foglalás</button>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                         <div
                          class="modal fade"
                          id="propertyModal6"
                          tabindex="-1"
                          aria-labelledby="propertyModalLabel6"
                          aria-hidden="true"
                         >
                          <div class="modal-dialog">
                           <div class="modal-content">
                            <div class="modal-header">
                             <h5 class="modal-title" id="propertyModalLabel6">Appartment Details</h5>
                             <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                             ></button>
                            </div>
                            <div class="modal-body">
                             <img
                              src="img/property-1.jpg"
                              alt="Appartment Image"
                              class="img-fluid mb-3"
                             />
                             <p><strong>Price:</strong> $12,345</p>
                             <p><strong>Location:</strong> 123 Street, New York, USA</p>
                             <p><strong>Size:</strong> 1000 Sqft</p>
                             <p><strong>Bedrooms:</strong> 3</p>
                             <p><strong>Bathrooms:</strong> 2</p>
                             <p>
                              <strong>Description:</strong> A beautiful appartment for sale in the heart
                              of New York City. This property offers a spacious living area, modern
                              amenities, and a convenient location.
                             </p>
                            </div>
                            <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                              Close
                             </button>
                             <button type="button" class="btn btn-primary">Foglalás</button>
                            </div>
                           </div>
                          </div>
                         </div>
                        
                      
                        
                          
                          <!-- Modals -->
                          <div class="modal fade" id="propertyModal1" tabindex="-1" aria-labelledby="propertyModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="propertyModalLabel1">Villa Details</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="img/property-2.jpg" alt="Villa Image" class="img-fluid mb-3">
                                    <p><strong>Ár:</strong> 30.000Ft/éj</p>
                                    <p><strong>Location:</strong> 123 Street, New York, USA</p>
                                    <p><strong>Size:</strong> 1000 Sqft</p>
                                    <p><strong>Bedrooms:</strong> 3</p>
                                    <p><strong>Bathrooms:</strong> 2</p>
                                    <p><strong>Description:</strong> A beautiful villa for rent in the heart of New York City.
                                      This property offers a spacious living area, modern amenities, and a convenient location.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="modal fade" id="propertyModal2" tabindex="-1" aria-labelledby="propertyModalLabel2" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="propertyModalLabel2">Office Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/property-3.jpg" alt="Office Image" class="img-fluid mb-3">
                                    <p><strong>Price:</strong> $12,345</p>
                                    <p><strong>Location:</strong> 123 Street, New York, USA</p>
                                    <p><strong>Size:</strong> 1000 Sqft</p>
                                    <p><strong>Bedrooms:</strong> 3</p>
                                    <p><strong>Bathrooms:</strong> 2</p>
                                    <p><strong>Description:</strong> A beautiful office for sale in the heart of New York City.
                                      This property offers a spacious working area, modern amenities, and a convenient location.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="modal fade" id="propertyModal3" tabindex="-1" aria-labelledby="propertyModalLabel3" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="propertyModalLabel3">Building Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/property-4.jpg" alt="Building Image" class="img-fluid mb-3">
                                    <p><strong>Price:</strong> $12,345</p>
                                    <p><strong>Location:</strong> 123 Street, New York, USA</p>
                                    <p><strong>Size:</strong> 1000 Sqft</p>
                                    <p><strong>Bedrooms:</strong> 3</p>
                                    <p><strong>Bathrooms:</strong> 2</p>
                                    <p><strong>Description:</strong> A beautiful building for rent in the heart of New York City.
                                      This property offers a spacious area, modern amenities, and a convenient location.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="modal fade" id="propertyModal4" tabindex="-1" aria-labelledby="propertyModalLabel4" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="propertyModalLabel4">Home Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/property-5.jpg" alt="Home Image" class="img-fluid mb-3">
                                    <p><strong>Price:</strong> $12,345</p>
                                    <p><strong>Location:</strong> 123 Street, New York, USA</p>
                                    <p><strong>Size:</strong> 1000 Sqft</p>
                                    <p><strong>Bedrooms:</strong> 3</p>
                                    <p><strong>Bathrooms:</strong> 2</p>
                                    <p><strong>Description:</strong> A beautiful home for sale in the heart of New York City.
                                      This property offers a spacious living area, modern amenities, and a convenient location.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="modal fade" id="propertyModal5" tabindex="-1" aria-labelledby="propertyModalLabel5" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="propertyModalLabel5">Shop Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/property-6.jpg" alt="Shop Image" class="img-fluid mb-3">
                                    <p><strong>Price:</strong> $12,345</p>
                                    <p><strong>Location:</strong> 123 Street, New York, USA</p>
                                    <p><strong>Size:</strong> 1000 Sqft</p>
                                    <p><strong>Bedrooms:</strong> 3</p>
                                    <p><strong>Bathrooms:</strong> 2</p>
                                    <p><strong>Description:</strong> A beautiful shop for rent in the heart of New York City.
                                      This property offers a spacious area, modern amenities, and a convenient location.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                            <div class="modal fade" id="propertyModal6" tabindex="-1" aria-labelledby="propertyModalLabel6" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="propertyModalLabel6">Appartment Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <img src="img/property-1.jpg" alt="Appartment Image" class="img-fluid mb-3">
                                    <p><strong>Price:</strong> $12,345</p>
                                    <p><strong>Location:</strong> 123 Street, New York, USA</p>
                                    <p><strong>Size:</strong> 1000 Sqft</p>
                                    <p><strong>Bedrooms:</strong> 3</p>
                                    <p><strong>Bathrooms:</strong> 2</p>
                                    <p><strong>Description:</strong> A beautiful appartment for sale in the heart of New York City.
                                      This property offers a spacious living area, modern amenities, and a convenient location.</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            
                          
        <!-- Property List End -->



      
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    
                    
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="{{ route('fooldal') }}">TravelGO</a>, Minden jog fenntartva. 
							
							
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
