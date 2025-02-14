


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
    include 'components/europeSection.php'; 
    ?>
    
    <div class="container mt-4 mb-4">
        <h1 class="text-center">7-Day Budget European Tour Package</h1>
        <div class="row mt-5">
            <div class="col-md-8 mt-4">
                <div class="mb-4 ms-4" style="font-size: 20px;">
                <i class="bi bi-pin-map-fill text-danger"></i>
                <span >Europe</span>
                </div>  
                <div class="row tour-icons">
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-clock-fill text-danger"></i>
                    <span> Duration:</span>
                    <p>11 days/10 nights</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-calendar-heart-fill text-danger"></i>
                    <span> Tour Type:</span>
                    <p>Honeymoon</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-people-fill text-danger"></i>
                    <span> Theme:</span>
                    <p>Spouse</p>
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
                    <h2 class="text-white">₹80,500</h2>
                    <p class="text-center text-white">Price per person</p>
                </div>
                <button class="text-center btn-danger rounded fw-bold" style="height:50px; width:250px;font-size:22px;">Book Now</button>
            </div>
         
        </div>


        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 mt-4">
                <div class="hero-section">
                    <img src="img/eiffel.jpeg" alt="Tour Image" class="main-img img-fluid">
                    <div class="d-flex flex-wrap justify-content-center mt-3 mx-3">
                        <img src="img/london-eye.jpeg" class="small-img img-fluid mx-2" alt="Small Image">
                        <img src="img/vetican.jpeg" class="small-img img-fluid mx-2" alt="Small Image">
                        <img src="img/Seine River Cruise.jpeg" class="small-img img-fluid mx-2" alt="Small Image">
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
                <p class="text-secondary">Europe is a dream destination for travelers, offering a mix of history, culture, food, and breathtaking landscapes. Whether you’re exploring charming old towns, vibrant cities, or stunning natural wonders, Europe has something for everyone.Europe is famous for its rich history, diverse cultures, stunning landscapes, and world-class cuisine. Here’s what makes Europe a top travel destination:</p>
                <h3>Trip Highlights:</h3>
                <p class="text-secondary">✅ <strong>World-Class Museums – </strong>Louvre (France), Uffizi Gallery (Italy), Prado (Spain)
                </p>
                <p class="text-secondary">✅ <strong>Eiffel Tower 🗼</strong> </p>
                <p class="text-secondary">✅ <strong>Seine River Cruise 🚢</strong>
                </p>
                <p class="text-secondary">✅ <strong>Louvre Museum 🖼️</strong> (See Mona Lisa)
                </p>
                <p class="text-secondary">✅ <strong>Van Gogh Museum </strong> 
                </p>
                <p class="text-secondary">✅ <strong>Lake Zurich </strong></p>
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
                                Day 1: Arrival in Paris, France 
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Arrive in Paris and meet your tour guide.</p>
                                    <p>✅ Stay in a 3-star hotel in Paris</p>
                                    <p>🍽️ Welcome Dinner at a local restaurant</p>
                                    <p>✅ In the evening, enjoy a Seine River Cruise to see iconic landmarks like the Eiffel Tower, Notre-Dame Cathedral, and more.</p>
                                    <p>✅ Stay Overnight</p>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Day 2: Paris Sightseeing
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Stay in a Central 3-star Hotel with Breakfast</p>
                                    <p>✅ Guided city tour covering the Louvre Museum, Champs-Élysées, Arc de Triomphe, and the Eiffel Tower.</p>
                                    <p>✅ Afternoon free for shopping or exploring local cafes.</p>
                                    <p>🍽️ Dinner at a local restaurant</p>
                                    <p>✅ Stay Overnight</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Day 3: Travel to Brussels, Belgium
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅  Take a morning train to Brussels (approx. 1.5 hours).</p>
                                    <p>✅ Stay at a  3-star hotel in Brussels with Breakfast</p>
                                    <p>✅ Upon arrival, enjoy a guided tour of the Grand Place, Atomium, and sample famous Belgian chocolates.</p>
                                    <p>🍽️ Dinner at a local restaurant</p>
                                    <p>✅ Stay Overnight</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Day 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 4: Brussels and Amsterdam, Netherlands
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Stay in a 3-star hotel in Amsterdam with breakfast</p>
                                    <p>✅  Morning sightseeing in Brussels. </p>
                                    <p>✅ Day Trip to Florence (High-Speed Train, 1.5h)</p>
                                    <p>✅ After lunch, travel by train to Amsterdam (approx. 2 hours).</p>
                                    <p>✅ Explore the Van Gogh Museum and the Anne Frank House.</p>
                                    <p>✅ Stay Overnight</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Day 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 5: Explore Amsterdam
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Stay in a 3-star hotel in Amsterdam with breakfast</p>
                                    <p>✅  Visit the Rijksmuseum and enjoy a boat tour through the canals of Amsterdam.</p>
                                    <p>✅ Free time to explore the city on your own or visit local markets.</p>
                                    <p>✅ After lunch, travel by train to Amsterdam (approx. 2 hours).</p>
                                    <p>🍽️ Dinner at a local restaurant</p>
                                    <p>✅ Stay Overnight</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Day 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 6: Travel to Zurich, Switzerland
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Travel by train to Zurich (approx. 8 hours).</p>
                                    <p>✅ Stay in a  3-star hotel in Zurich </p>
                                    <p>✅ In the evening, enjoy a guided walking tour of the Old Town and lakeside promenades.</p>
                                    <p>🍽️ Dinner at a local restaurant</p>
                                    <p>✅ Stay Overnight</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- Day 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header text-dark" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Day 7: Departure from Zurich
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#itineraryAccordion">
                                <div class="accordion-body">
                                    <p>✅ Breakfast at your hotel </p>
                                    <p>✅ Free time for last-minute shopping.</p>
                                    <p>✅ Transfer to the airport for your return flight.</p>
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
                <p class="text-secondary">✅ <strong>Intra-Europe Travel: </strong>High-speed trains
                </p>
                <p class="text-secondary">✅ <strong>Accommodation: </strong>Premium 3-star hotels with breakfast</p>
                <p class="text-secondary">✅ <strong>Meals: </strong>Daily breakfast + 6 dinners with local cuisine experiences
                </p>
                <p class="text-secondary">✅ <strong>Guided Tours: </strong>Local expert guides in each city
                </p>
                <p class="text-secondary">✅ <strong>Airport transfers</strong> and intercity travel by comfortable trains
                </p>
                <p class="text-secondary">✅ <strong> Attractions & Entry Tickets </strong>(Eiffel Tower, Louvre, Colosseum, etc.) </p>
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
