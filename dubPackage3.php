



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TapAndTours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <!-- font icons  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <!-- Bootstrap 5 JS (Required for toggling navbar in mobile) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS (Required for Navbar & Dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <style>
        .navbar {
            background-color: #fff;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
       
        .hero-section {
    position: relative;
    text-align: center;
    padding: 20px 0;
        }

        .main-img {
            width: 100%;
            max-height: 450px;
            object-fit: cover;
            border-radius: 10px;
        }

        .small-img {
            width: 100%;
            max-width: 150px;
            aspect-ratio: 1/1;
            height: auto;
            border-radius: 10px;
        }

        .contact-form{
            /* background-color:rgb(166, 230, 247); */
            background-color:rgb(243, 202, 164);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(19, 8, 8, 0.1);
        }

        .package-container{
            background-color: rgb(255, 255, 255);
            position: relative;
            padding: 20px 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(19, 8, 8, 0.1);
        }

        .itinerary-section {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .day-heading {
            background: #e0e5f5;
            padding: 5px 15px;
            font-weight: bold;
            display: inline-block;
            border-radius: 5px;
        }
        .day-content {
            margin-top: 10px;
        }
        
        .sidebar {
            /* background-color: rgb(190, 238, 251);     */
            background-color:rgb(243, 202, 164);   
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(19, 8, 8, 0.1);
        }

        .tour-icons{
            position: relative;
            text-align: center;
            padding: 20px 0;
            border-top: 2px solid gray;
            border-bottom: 2px solid gray;
        }
    </style>
</head>
<body>
    <?php 
    include 'components/header.php'; 
    ?>

    <?php 
    include 'components/dubaiSection.php'; 
    ?>
    
    <div class="container mt-4 mb-4">
        <h1 class="text-center">6 Days Dubai Guided Tour Package</h1>
        <div class="row mt-5">
            <div class="col-md-8 mt-4">
                <div class="mb-4 ms-4" style="font-size: 20px;">
                <i class="bi bi-pin-map-fill text-danger"></i>
                <span >Dubai</span>
                </div>  
                <div class="row tour-icons">
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-clock-fill text-danger"></i>
                    <span> Duration:</span>
                    <p>6 days/5 nights</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-calendar-heart-fill text-danger"></i>
                    <span> Tour Type:</span>
                    <p>Vacation</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-people-fill text-danger"></i>
                    <span> Theme:</span>
                    <p>Friends</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-car-front-fill text-danger"></i>
                    <span> Transfer:</span>
                    <p>Transfers Included</p>
                    </div>
                   
                </div>
            </div>
          
            <div class="col-md-4 mt-4 text-center" >
                <div class="container bg-success rounded mb-4 p-2 text-center" style="height:150px;width:250px">
                    <h5 class="text-white">Starting From</h5>
                    <h2 class="text-white">₹39,000</h2>
                    <p class="text-center text-white">Price per person</p>
                </div>
                <button class="text-center btn-danger rounded fw-bold" style="height:50px; width:250px;font-size:22px;">Book Now</button>
            </div>
         
        </div>


        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 mt-4">
                <div class="hero-section">
                    <img src="img/dubai/Dubai Marina.jpeg" alt="Tour Image" class="main-img img-fluid">
                    <div class="d-flex flex-wrap justify-content-center mt-3 mx-3">
                        <img src="img/dubai/The Dubai Mall.jpeg" class="small-img img-fluid mx-2" alt="Small Image">
                        <img src="img/dubai/Dubai Desert Safari.jpeg" class="small-img img-fluid mx-2" alt="Small Image">
                        <img src="img/dubai/Palm Jumeirah.jpeg" class="small-img img-fluid mx-2" alt="Small Image">
                    </div>
                </div>
            </div>


            <div class="col-md-4 mt-4">
                <div class="contact-form mt-3">
                    <h5 class="mt-3 mb-3 text-center text-decoration-underline">Get in touch with our travel expert</h5>
                    <form>
                        <div class="mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Your Name*">
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="email" class="form-control" placeholder="Email Address">
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="tel" class="form-control" placeholder="Mobile Number*">
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="mt-3 mb-3">
                            <input type="number" class="form-control" placeholder="Total Pax">
                        </div>
                        <ul>
                            <li class="text-muted mx-auto"> We assure the privacy of your contact data.</li>
                            <li class="text-muted mx-auto">This data will only be used by our team to contact you and no other purposes.</li>
                        </ul>
                       
                        
                        <button class="btn btn-danger w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 mt-4 mb-4">
               <div class="container package-container bg-white">
                <h3>Overview</h3>
                <p class="text-secondary">Experience Dubai on a budget without compromising on the fun!. Explore iconic landmarks, enjoy comfortable accommodations, delicious meals, and expert-guided sightseeing tours.</p>
                <h3>Trip Highlights:</h3>
                <p class="text-secondary">✅ <strong>Burj Khalifa – </strong>The world’s tallest building
                </p>
                <p class="text-secondary">✅ <strong>The Dubai Mall – </strong>One of the largest shopping malls in the world</p>
                <p class="text-secondary">✅ <strong>Palm Jumeirah – </strong>An artificial island shaped like a palm tree
                </p>
                <p class="text-secondary">✅ <strong> Dubai Marina – </strong>A lively waterfront area
                </p>
                <p class="text-secondary">✅ <strong> Dubai Desert Safari - </strong>Take a thrilling ride across the dunes.
                </p>
              
               </div>
            </div>
            <div class="col-md-4 mt-4" >
                <div class="sidebar">
                    <h5 class="text-center text-decoration-underline">Why Choose Us?</h5>
                    <p class="text-secondary text-center">TapAndTours Pvt. Ltd.' is an award-winning travel organization that excels with quality services from its experienced staff.Over the years, the company has received positive feedback from its existing clients, so one can expect a cordial reception.Our company's IATA certification ensures that we provide the best booking deals available.</p>
                    
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 mt-4 mb-4">
                <div class="package-container">
                    <h3>Itinerary</h3>
                    <div class="accordion" id="itineraryAccordion">
                        
                        <!-- Day 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Day 1: Arrival & Dubai City Exploration
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Transfer from Dubai International Airport to your 2-star hotel or hostel.
                                    </p>
                                    <p>✅ Check-in at your budget-friendly accommodation.</p>
                                    <p>🍽️  Budget-friendly meal at a local restaurant.</p>
                                    <p>🍽️ Visit Dubai Mall, Burj Khalifa (outside), and Dubai Fountain.</p>
                                    <p>✅ Enjoy an affordable meal at a local restaurant.</p>
                                    <p>✅ Overnight Stay at the hotel.</p>
                                   
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Day 2: Desert Safari & Cultural Experience
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>🍽️ Simple breakfast at the hotel or nearby café.l</p>
                                    <p>✅ Free time to relax or explore local markets.</p>
                                    <p>🍽️ Light meal at a local café or street food vendor.</p>
                                    <p>✅ Enjoy dune bashing, camel rides, and sandboarding, followed by a budget-friendly BBQ dinner and cultural performances in the desert.</p>
                                    <p>✅ Overnight Stay at the hotel.</p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day 3: Dubai Creek & Old Dubai
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>🍽️ Breakfast at the hotel</p>
                                    <p>✅ Visit Dubai Creek, take an abra (boat) ride across the creek, and explore the Gold and Spice Souks.</p>
                                    <p>🍽️ Traditional and affordable local meal at the souk area.</p>
                                    <p>✅ Visit the Dubai Museum and Al Fahidi Historic District.</p>
                                    <p>🍽️ Enjoy a meal at a local restaurant or food court.</p>
                                    <p>✅ Overnight Stay at the hotel.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 4: Jumeirah Beach & Budget Shopping
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>🍽️ Breakfast at the hotel</p>
                                    <p>✅ Visit Jumeirah Beach for a relaxing day, with views of the Burj Al Arab.</p>
                                    <p>✅ Budget-friendly meal at a local beach café.</p>
                                    <p>✅ Explore Al Karama market for affordable shopping.</p>
                                    <p>🍽️ Enjoy an affordable Arabic meal in one of the local restaurants.</p>
                                    <p>✅ Overnight Stay at the hotel.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Day 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 5: Global Village & Dubai Marina
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>🍽️ Breakfast at the hotel</p>
                                    <p>✅ Visit Global Village (seasonal), where you can enjoy cultural exhibits and affordable food stalls.</p>
                                    <p>🍽️ Lunch at Global Village or a local restaurant.</p>
                                    <p>✅ Explore Dubai Marina and take a free walk along the waterfront.
                                    </p>
                                    <p>🍽️ Affordable meal at a local restaurant.</p>
                                    <p>✅ Overnight Stay at the hotel</p>
                                </div>
                            </div>
                        </div>
                        <!-- Day 6-->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 6: Relax & Departure
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>🍽️ Breakfast at the hotel</p>
                                    <p>✅ Free time for last-minute shopping or relaxing at the hotel.</p>
                                    <p>🍽️ Enjoy a casual lunch at a nearby café.</p>
                                    <p>✅ Airport transfer for departure.</p>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4" >
                <div class="sidebar">
                    <h5 class="text-center text-decoration-underline">Need Help for any Details?</h5>
                    <p  class="text-center text-secondary">Our destination expert will be happy to help you resolve your queries for this tour.</p>
                    <p><strong class="text-danger">Call 24/7 For Any Help</strong></p>
                    <p><i class="bi bi-telephone"></i> 9990205804</p>
                    <p><i class="bi bi-clock"></i> 10:00 AM - 07:00 PM (Mon to Sat)</p>
                </div>
            </div>
           
        </div>

        <div class="row">
            <div class="col-md-8 mt-4 mb-4">
               <div class="container package-container bg-white">
                <h3>👜 Tour Inclusions</h3>
                <p class="text-secondary">✅ <strong>Accommodation: </strong>2-star hotels or hostels with breakfast</p>
                <p class="text-secondary">✅ <strong>Meals: </strong>Daily lunch +  dinners with local cuisine experiences
                </p>
                <p class="text-secondary">✅ <strong>Guided Tours: </strong>Local expert guides in each city
                </p>
                <p class="text-secondary">✅ <strong>Airport Transfers</strong>
                </p>
                <p class="text-secondary">✅ <strong> Attractions & Entry Tickets </strong></p>
               </div>
            </div>
        </div>
    </div>


    <?php 
    include 'components/footer.php'; 
    ?>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
