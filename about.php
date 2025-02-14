
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TapAndTours</title>
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
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<body>
    <!-- header  -->
    <?php 
    include 'components/header.php';
    ?> 
   
    

    <!-- main content -->
        <section>
            <div class="bg-image d-flex justify-content-center align-items-center mb-0 mt-0" style="background-image: url('img/night.jpg'); height: 50vh;">
                <div class="container-fluid">
                    <div class="mx-auto mb-5">
                        <h1 class="text-white text-center">Welcome to TapAndTours!</h1>
                    </div>
                    <div class="carousel-container">
                    <h4 class="text-white text-left">24/7 Available</h1>
                    <h4 class="text-white text-left">Call Us Anytime at: +9838767673</h3>
                    </div>
                </div>
              </div>

          <!-- About us  -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6"  data-aos="flip-left">
                         <img src="img/about.jpeg" alt="about" class=" mb-4 img-fluid about-img" style="height:700px; width:100%;margin-top:15%;">
                    </div>
                    <div class="col-md-6 about-text"  data-aos="flip-right">
                        <h1 class="text-dark text-center mt-4 mb-4">About Us</h1>
                        <p class="container-fluid text-secondary text-center">Welcome to Tap & Tours, your ultimate travel companion dedicated to making every journey seamless, exciting, and unforgettable. We believe that traveling is more than just reaching a destination—it’s about the experiences, stories, and memories you create along the way. Whether you're looking for a serene beach retreat, an adventurous mountain expedition, a culturally rich heritage tour, or a luxurious international getaway, we are here to craft the perfect travel plan just for you.</p>
                        <p class="container-fluid text-secondary text-center">Founded in the year 2024 as TapAndTours.in, an online travel booking   platform with an aim of
                        providing assured quality services and worry less travel to its customers.At Tap & Tours, we take pride in offering curated travel experiences that cater to every traveler’s needs. Our meticulously designed itineraries ensure that you get the best of every destination while enjoying the convenience of well-planned tours, comfortable accommodations, and hassle-free bookings. We provide a diverse range of services, including domestic and international tour packages, personalized trip planning, group tours, honeymoon getaways, adventure trips, and business travel solutions.Our user-friendly platform allows you to browse, compare, and book tours effortlessly. Whether you prefer a pre-designed package or a custom itinerary tailored to your specific interests, we make it easy for you to explore the world with just a few taps. With our 24/7 customer support, you can travel with confidence, knowing that assistance is always available whenever you need it.
                        At Tap & Tours, we don’t just sell trips; we create experiences that stay with you forever. Let us take care of the planning while you immerse yourself in new cultures, breathtaking landscapes, and unforgettable moments. Adventure awaits—tap into a world of travel with Tap & Tours!</p>
                    </div>
                </div>
            </div>
           
          <!-- how it works  -->
         

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
                                              <div class="card">
                                                  <img class="img-fluid" alt="100%x280" src="img/maldives.jpg">
                                                  <div class="card-body">
                                                      <h4 class="card-title">Mesmerizing Maldives Escape</h4>
                                                      <p class="card-text"><strong>Duration: </strong>4 Nights / 5 Days.</p>
                                                      <p class="card-text"><strong>Starting from: </strong>Rs.30000/- per person</p>
          
                                                  </div>
          
                                              </div>
                                          </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/himachal.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Himachal Adventure Retreat</h4>
                                                    <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days</p>
                                                    <p class="card-text"><strong>Starting from: </strong>Rs.12000/- per person</p>
        
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
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
                                              <div class="card">
                                                  <img class="img-fluid" alt="100%x280" src="img/kashmir.jpg">
                                                  <div class="card-body">
                                                      <h4 class="card-title"> Captivating Kashmir Delight</h4>
                                                      <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days.</p>
                                                      <p class="card-text"><strong>Starting from: </strong>Rs.15000/- per person</p>
          
                                                  </div>
          
                                              </div>
                                          </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/dubai.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Dubai Luxury Escape</h4>
                                                    <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days</p>
                                                    <p class="card-text"><strong>Starting from: </strong>Rs.25000/- per person</p>
        
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
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
                                              <div class="card">
                                                  <img class="img-fluid" alt="100%x280" src="img/goa.jpeg">
                                                  <div class="card-body">
                                                      <h4 class="card-title"> Goa Beach Getaway</h4>
                                                      <p class="card-text"><strong>Duration: </strong>4 Nights / 5 Days.</p>
                                                      <p class="card-text"><strong>Starting from: </strong>Rs.10000/- per person</p>
          
                                                  </div>
          
                                              </div>
                                          </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="img/kerala.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Enchanting Kerala Backwaters</h4>
                                                    <p class="card-text"><strong>Duration: </strong>5 Nights / 6 Days</p>
                                                    <p class="card-text"><strong>Starting from: </strong>Rs.15000/- per person</p>
        
                                                </div>
        
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="card">
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






<script>
  AOS.init();
</script>  

</body>
</html>