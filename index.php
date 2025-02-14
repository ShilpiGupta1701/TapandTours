<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TapAndTours</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="index.js"></script>
     <!-- Bootstrap 5 JS (Required for toggling navbar in mobile) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS (Required for Navbar & Dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
</head>
<body>

    <!-- header  -->
   

    <!-- header  -->
    <?php 
    include 'components/header.php';
    ?>

    <!-- main content -->
        <section>

           <!-- carousel  -->
          <div class="carousel-container">
            <!-- Carousel -->
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
              <div class="carousel-inner">
                <div class="carousel-item active">
                <video autoplay loop muted playsinline class="landing-video">
                    <source src="img/carousel-video.mp4" type="video/mp4">
                </video>
                </div>
                <div class="carousel-item">
                  <img src="img/thai2.jpg" class="carousel-img d-block w-100" alt="..." style="width: 100vw;height:85vh;">
                </div>
                <div class="carousel-item">
                  <img src="img/goa-night.jpg" class="carousel-img d-block w-100" alt="..."  style="width: 100vw;height:85vh;">
                </div>
                <div class="carousel-item">
                  <img src="img/dubai.jpg" class="carousel-img d-block w-100" alt="..."  style="width: 100vw;height:85vh;">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          
            <!-- Container -->
            <div class="container overlay-container">
              <div class="grid">
                <!-- From City -->
                <div class="grid-item mx-auto">
                  <label for="from-city">From City</label>
                  <input type="text" id="from-city" placeholder="Enter city">
                </div>
          
                <!-- To City -->
                <div class="grid-item ">
                  <label for="to-city">To City</label>
                  <input type="text" id="to-city" placeholder="Enter city">
                </div>
          
                <!-- Date & Duration -->
                <div class="grid-item ">
                  <label for="date">Date & Duration</label>
                  <div class="inline-group">
                    <input type="date" id="date">
                    <input type="number" id="duration" placeholder="Days" min="1" max="30">
                  </div>
                </div>
          
                <!-- Budget Range -->
                <!-- <div class="grid-item ">
                  <label for="budget-range">Budget (per day)</label>
                  <div class="range-group">
                    <input type="range" id="budget-range" min="4000" max="100000" step="1000" oninput="updateBudgetValue(this.value)">
                    <div class="range-values ">
                      <span>4,000</span>
                      <span id="budget-value">50,000</span>
                      <span id="max-value">1,00,000</span>
                    </div>
                  </div>
                </div> -->

                <div class="grid-item">
                  <label for="budget-range">Budget (per day)</label>
                  <div class="range-group">
                    <input type="range" id="budget-range" min="5000" max="100000" step="1000" oninput="updateBudgetValue(this.value)">
                    <div class="range-values">
                      <span>5,000</span> 
                      <span id="budget-value">1,00,000</span> <!-- Only min and max values shown -->
                    </div>
                  </div>
                </div>



                          
                <!-- Search Button -->
                <div class="grid-item">
                  <label>&nbsp;</label>
                  <button type="button" class="mx-auto">Search</button>
                </div>
              </div>
            </div>
          </div>

          <!-- About us  -->
          <div class="container-fluid mx-0 abt-container">
            <h1 class=" mb-4 pt-5 text-dark text-center">Welcome to TapAndTours!</h1>
            <p class="mt-4 mb-4 pt-3 pb-4 text-dark text-center">Founded in the year 2024 as TapAndTours.in, an online travel booking   platform with an aim of
              providing assured quality services and worry less travel to its customers.Welcome to Tap & Tours, your ultimate travel companion dedicated to making every journey seamless, exciting, and unforgettable. We believe that traveling is more than just reaching a destination—it’s about the experiences, stories, and memories you create along the way. Whether you're looking for a serene beach retreat, an adventurous mountain expedition, a culturally rich heritage tour, or a luxurious international getaway, we are here to craft the perfect travel plan just for you.</p>
              <p class="mt-4 mb-4 pt-3 pb-4 text-dark text-center">What sets us apart is our commitment to quality and customer satisfaction. With a team of experienced travel experts, we ensure that every aspect of your journey is carefully planned and executed, allowing you to relax and enjoy the adventure. From budget-friendly vacations to luxury getaways, our packages are designed to cater to all kinds of travelers. We collaborate with trusted partners, hotels, and transport providers to guarantee a seamless and comfortable travel experience.</p>
              <div class="container-fluid  text-center">
                <a class="btn btn-dark mb-5" href="about.php" role="button">Learn More About Us</a>
              </div>
              
          </div>

          <!-- trending destinations -->
          <div class="destination-container mb-4">
           <div class="row mb-4 mt-4 text-center">
            <div class="col-12 mb-4 mt-4">
              <h1 class="text-center mb-4">Top Trending Destinations</h1>
            </div>

    <!-- Bootstrap Carousel -->
    <div id="trendingDestinationsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <!-- <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
              <div class="bg-image rounded-circle mx-auto" style="background-image: url('img/cropped-images/Kedarnath.png'); height: 250px; width: 250px;"></div>
              <h4 >Russia</h4>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
              <div class="bg-image rounded-circle mx-auto " style="background-image: url('img/cropped-images/malaysia.jpeg'); height: 250px; width: 250px;"></div>
              <h4>Malaysia</h4>
            </div>

            <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
              <div class="bg-image rounded-circle mx-auto" style="background-image: url('img/cropped-images/ladakh.png'); height: 250px; width: 250px;"></div>
              <h4>Hong-kong</h4>
            </div>

          </div>
        </div> -->
        

        <div class="carousel-item active">
          <div class="row justify-content-center">
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/russia.jpeg'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Russia</h4>
              </div>
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/malaysia.jpeg'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Malaysia</h4>
              </div>
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/hong-kong.jpeg'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Hong-Kong</h4>
              </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/dubai.png'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Dubai</h4>
              </div>
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/europe.png'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Europe</h4>
              </div>
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/maldives.png'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Maldives</h4>
              </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row justify-content-center">
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/mauritius.jpeg'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Mauritius</h4>
              </div>
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/turkey.jpeg'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Turkey</h4>
              </div>
              <div class="col-12 col-sm-6 col-md-3 mb-4 text-center">
                  <div class="bg-image rounded-circle mx-auto" 
                      style="background-image: url('img/cropped-images/egypt.jpg'); 
                              height: 250px; 
                              width: 250px; 
                              background-size: cover; 
                              background-position: center; 
                              background-repeat: no-repeat;">
                  </div>
                  <h4>Egypt</h4>
              </div>
          </div>
        </div>

      </div>

      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#trendingDestinationsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#trendingDestinationsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
           </div>
          </div>




          <!-- how it works  -->
          <!-- <div class="bg-image d-flex justify-content-center align-items-center mb-5 mt-5" style="background-image: url('img/night.jpg'); height: 70vh;">
            <div class="mx-auto">
              <h1 class="text-white text-center">How it works</h1>
              <div class="row">

                <div class="col-md-3 mt-5 ms-4 mx-auto"><h3 class="text-white">Chose your destination</h3></div>
                <div class="col-md-3 mt-5 ms-4 mx-auto"><h3 class="text-white">Send us Enquiry</h3></div>
                <div class="col-md-3 mt-5 ms-4 mx-auto"><h3 class="text-white">Book your Package</h3></div>
              </div>
            </div>
          </div> -->

          <!-- our packages  -->
          <!-- <section class="pt-5 pb-5">
              <div class="container">
                    <div class="row">
                              <div class="col-6">
                                  <h1 class="mb-5">Our Popular Packages</h1>
                              </div>
                              <div class="col-6 text-right">
                                  <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                      <i class="fa fa-arrow-left"></i>
                                  </a>
                                  <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                      <i class="fa fa-arrow-right"></i>
                                  </a>
                              </div>
                              <div class="col-12">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                    
                                                      <div class="col-md-4 mb-3">
                                                          <div class="card package-card">
                                                          
                                                              <img class="img-fluid" alt="100%x280" src="img/maldives.jpg">
                                                      
                                                              
                                                              <div class="card-body">
                                                                  <h4 class="card-title">Mesmerizing Maldives Escape</h4>
                                                                  <p class="card-text"><strong>Duration: </strong>4 Nights / 5 Days.</p>
                                                                  <p class="card-text"><strong>Starting from: </strong>Rs.30000/- per person</p>
                      
                                                              </div>
                      
                                                          </div>
                                                      </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card  package-card">
                                                            <img class="img-fluid" alt="100%x280" src="img/himachal.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Himachal Adventure Retreat</h4>
                                                                <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days</p>
                                                                <p class="card-text"><strong>Starting from: </strong>Rs.12000/- per person</p>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card  package-card">
                                                            <img class="img-fluid" alt="100%x280" src="img/thailand.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Exotic Thailand Tour</h4>
                                                                <p class="card-text"><strong>Duration: </strong>6 Nights / 7 Days.</p>
                                                                <p class="card-text"><strong>Starting from: </strong>Rs.25000/- per person</p>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                  
                                                        
                                                </div> 
                                            </div>


                                            <div class="carousel-item">
                                                <div class="row">
                    
                                                      <div class="col-md-4 mb-3">
                                                          <div class="card package-card">
                                                              <img class="img-fluid" alt="100%x280" src="img/kashmir.jpg">
                                                              <div class="card-body">
                                                                  <h4 class="card-title"> Captivating Kashmir Delight</h4>
                                                                  <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days.</p>
                                                                  <p class="card-text"><strong>Starting from: </strong>Rs.15000/- per person</p>
                      
                                                              </div>
                      
                                                          </div>
                                                      </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card  package-card">
                                                            <img class="img-fluid" alt="100%x280" src="img/dubai.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Dubai Luxury Escape</h4>
                                                                <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days</p>
                                                                <p class="card-text"><strong>Starting from: </strong>Rs.25000/- per person</p>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card  package-card">
                                                            <img class="img-fluid" alt="100%x280" src="img/europe.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">European Delight Tour</h4>
                                                                <p class="card-text"><strong>Duration: </strong>10 Nights / 11 Days.</p>
                                                                <p class="card-text"><strong>Starting from: </strong>Rs.45000/- per person</p>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                  
                                                        
                                                </div> 
                                            </div>

                                            <div class="carousel-item">
                                                <div class="row">
                    
                                                      <div class="col-md-4 mb-3">
                                                          <div class="card  package-card">
                                                              <img class="img-fluid" alt="100%x280" src="img/goa.jpeg">
                                                              <div class="card-body">
                                                                  <h4 class="card-title"> Goa Beach Getaway</h4>
                                                                  <p class="card-text"><strong>Duration: </strong>4 Nights / 5 Days.</p>
                                                                  <p class="card-text"><strong>Starting from: </strong>Rs.10000/- per person</p>
                      
                                                              </div>
                      
                                                          </div>
                                                      </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card  package-card">
                                                            <img class="img-fluid" alt="100%x280" src="img/kerala.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Enchanting Kerala Backwaters</h4>
                                                                <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days</p>
                                                                <p class="card-text"><strong>Starting from: </strong>Rs.15000/- per person</p>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card  package-card">
                                                            <img class="img-fluid" alt="100%x280" src="img/rajasthan.jpg">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Majestic Rajasthan Tour</h4>
                                                                <p class="card-text"><strong>Duration: </strong>6 Nights / 7 Days.</p>
                                                                <p class="card-text"><strong>Starting from: </strong>Rs.15000/- per person</p>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                                                  
                                                        
                                                </div> 
                                            </div>
                    
                                        </div>

                                    </div>
                              </div>
                    </div>
              </div>
          </section> -->

          <?php
          include 'components/popularPackages.php';
          ?>


        </section>
    
   
    <!-- Footer -->
    <?php 
    include 'components/footer.php';
    ?>
    <!-- Footer -->
      
</body>
</html>