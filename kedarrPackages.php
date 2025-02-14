
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
    include 'components/kedarSection.php'; 
    ?>
    
    <div class="container mt-4 mb-4">
        <h1 class="text-center">Kedarnath 5-days Tour Package</h1>
        <div class="row mt-5">
            <div class="col-md-8 mt-4">
                <div class="mb-4 ms-4" style="font-size: 20px;">
                <i class="bi bi-pin-map-fill text-danger"></i>
                <span >Uttarakhand, India</span>
                </div>  
                <div class="row tour-icons">
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-clock-fill text-danger"></i>
                    <span> Duration:</span>
                    <p>5-days</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-bell-fill text-danger"></i>
                    <span> Tour Type:</span>
                    <p>Pilgrimage</p>
                    </div>
                    <div class="col-md-3" style="font-size: 20px;"><i class="bi bi-people-fill text-danger"></i>
                    <span> Theme:</span>
                    <p>Solo/Friends/Family</p>
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
                    <h2 class="text-white">₹8000.00/-</h2>
                    <p class="text-center text-white">Price per person</p>
                </div>
                <button class="text-center btn-danger rounded fw-bold" style="height:50px; width:250px;font-size:22px;">Book Now</button>
            </div>
         
        </div>


        <div class="row">
            <!-- <div class="col-md-8 mt-4">
                <div class="hero-section">
                    <img src="img/Kedarnath Mandir.jpg" alt="Tour Image" style="height:450px;width: 650px;">
                    <div class="d-flex mt-3 ms-4 me-4">
                        <img src="img/chandrashila.jpg" class="ms-2 me-2"  style="height:150px;width: 250px;" alt="Small Image">
                        <img src="img/wildlife2.png" class=" ms-2 me-2"  style="height:150px;width: 250px;" alt="Small Image">
                        <img src="img/sonprayag.jpg" class=" ms-2 me-2" style="height:150px;width: 250px;" alt="Small Image">
                    </div>
                </div>
            </div> -->
           
            <div class="col-lg-8 col-md-10 col-sm-12 mt-4">
                <div class="hero-section">
                    <img src="img/Kedarnath Mandir.jpg" alt="Tour Image" class="main-img img-fluid">
                    <div class="d-flex flex-wrap justify-content-center mt-3 mx-3">
                        <img src="img/chandrashila.jpg" class="small-img img-fluid mx-2" alt="Small Image">
                        <img src="img/wildlife2.png" class="small-img img-fluid mx-2" alt="Small Image">
                        <img src="img/sonprayag.jpg" class="small-img img-fluid mx-2" alt="Small Image">
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
                <p class="text-secondary">Embark on a spiritual and adventurous journey to Kedarnath, one of the holiest shrines of Lord Shiva, nestled in the Garhwal Himalayas. This 5-day itinerary ensures a well-planned pilgrimage, covering scenic landscapes, religious sites, and comfortable travel options.</p>
                <h3>Trip Highlights:</h3>
                <p class="text-secondary">✅ <strong>Visit Kedarnath Temple,</strong> one of the 12 Jyotirlingas
                </p>
                <p class="text-secondary">✅ <strong>Scenic drive</strong> through Haridwar, Rishikesh, and Guptkashi</p>
                <p class="text-secondary">✅ <strong>Trekking adventure</strong> from Gaurikund to Kedarnath (or helicopter ride option)
                </p>
                <p class="text-secondary">✅ <strong>Witness the divine Kedarnath Aarti</strong>
                </p>
                <p class="text-secondary">✅ <strong>Explore Rishikesh,</strong> including Ganga Aarti at Triveni Ghat</p>
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
                <div class="itinerary-section package-container">
                    <h3>Itinerary</h3>
                    <div class="day-content">
                        <span class="day-heading">Day 1</span>
                        <h4 class="mt-2 text-Primary">Delhi to Guptkashi (Approx. 400 km | 12-14 hrs)</h4>
                        <p><strong>Morning: </strong>Depart from Delhi early (around 5 AM). Travel via Haridwar and Rishikesh.
                        </p>
                        <p><strong>Afternoon: </strong>Stop at Haridwar/Rishikesh for lunch and a short visit to Har Ki Pauri and Ram Jhula.
                        </p>
                        <p><strong>Evening: </strong>Reach Guptkashi/Sonprayag by late evening, check-in at a hotel, rest.
                        </p>
                        <p><strong>Overnight stay: </strong>Guptkashi/Sonprayag

                        </p>
                    </div>
                    <div class="day-content">
                        <span class="day-heading">Day 2</span>
                        <h4 class="mt-2 text-Primary">Guptkashi to Kedarnath (Trek/Helicopter)</h4>
                        <p><strong>Morning: </strong>Drive to Gaurikund (starting point for trek)
                        </p>
                        <p><strong>Trek option: </strong>16 km trek to Kedarnath (takes 6-8 hours)
                        </p>
                        <p><strong>Helicopter option: </strong>Fly from Phata/Sersi/Guptkashi (10-min ride)
                        </p>
                        <p><strong>Afternoon: </strong>Check-in at a guest house near Kedarnath Temple, relax.
                        </p>
                        <p><strong>Evening: </strong>Visit Kedarnath Temple for Aarti & Darshan.
                        </p>
                        <p><strong>Overnight stay:</strong>Kedarnath
                        </p>
                    </div>
                    <div class="day-content">
                        <span class="day-heading">Day 3</span>
                        <h4 class="mt-2 text-Primary">Kedarnath to Guptkashi (Trek Down)</h4>
                        <p><strong>Morning: </strong>Attend Kedarnath Temple early morning Aarti, explore surroundings.
                        </p>
                        <p><strong>Late Morning: </strong>Begin trek back to Gaurikund or take a helicopter.
                        </p>
                        <p><strong>Afternoon: </strong>Reach Guptkashi, check-in at a hotel, rest.
                        </p>
                        <p><strong>Evening: </strong>Visit Triyuginarayan Temple (believed to be Lord Shiva & Parvati’s wedding site).
                        </p>
                        <p><strong>Overnight stay: </strong>Guptkashi

                        </p>
                    </div>
                    <div class="day-content">
                        <span class="day-heading">Day 4</span>
                        <h4 class="mt-2 text-Primary">Guptkashi to Rishikesh (Approx. 200 km | 7-8 hrs)</h4>
                        <p><strong>Morning: </strong>Morning: Start journey back to Rishikesh.
                        </p>
                        <p><strong>Afternoon: </strong>Reach Rishikesh, check-in at a hotel, lunch.
                        </p>
                        <p><strong>Evening: </strong>Visit Laxman Jhula, Ram Jhula, attend Ganga Aarti at Triveni Ghat.

                        </p>
                        <p><strong>Overnight stay: </strong>Rishikesh


                        </p>
                    </div>
                    <div class="day-content">
                        <span class="day-heading">Day 5</span>
                        <h4 class="mt-2 text-Primary"> Rishikesh to Delhi (Approx. 240 km | 6-7 hrs)</h4>
                        <p><strong>Morning: </strong>Morning: Enjoy local sightseeing, try adventure activities (if interested) like river rafting or bungee jumping.
                        </p>
                        <p><strong>Afternoon: </strong>Depart for Delhi after lunch.
                        </p>
                        <p><strong>Evening: </strong>Reach Delhi by night, end of the trip.
                        </p>
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
    </div>


    <?php 
    include 'components/footer.php'; 
    ?>
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
