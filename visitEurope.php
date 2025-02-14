
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TapAndTours</title>
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
     <!-- Bootstrap 5 CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <!-- Bootstrap 5 JS (Required for toggling navbar in mobile) -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS (Required for Navbar & Dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    

</head>
<body>
    <?php
    include 'components/header.php';
    ?>

    <?php
    include 'components/europeSection.php';
    ?>

     <!-- visiting cards  -->
    <div class="container mt-5 p-4"> 
        <h1 class="text-center">Places to visit in Europe</h1>

        <!-- card 1  -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/eiffel.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Eiffel Tower 🗼, Paris</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                        <span class="ms-2 fw-bold">5.0</span>
                    <p class="card-text mt-4">The symbol of Paris, standing 330 meters (1,083 ft) tall. Built by Gustave Eiffel in 1889 for the World’s Fair.Best views from Trocadéro Gardens or Champ de Mars.
                    Visit at night for a stunning light show every hour.</p>
                    
                
                    <button type="button" class="btn btn-success">Enquire Now</button>
                

                </div>
                </div>
            </div>
        </div>
        
        <!-- card 2 -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/Louvre Museum.jpg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Louvre Museum 🎨</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half text-warning"></i>
                        <span class="ms-2 fw-bold">4.7</span>
                    <p class="card-text mt-4">The world’s largest museum, home to 35,000+ artworks.Famous for Leonardo da Vinci’s Mona Lisa and Venus de Milo.Stunning glass pyramid entrance designed by I. M. Pei.Located in the former royal palace of French kings.</p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 3  -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/Seine River Cruise.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Seine River Cruise, Paris🚢</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half text-warning"></i>
                        <span class="ms-2 fw-bold">4.8</span>
                    <p class="card-text mt-4">A Seine River Cruise is one of the best ways to experience Paris, offering stunning views of the city's landmarks from the water. Whether you choose a daytime sightseeing cruise or a romantic dinner cruise, the experience is truly magical!
                    </p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 4 -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/london-eye.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">London Eye 🎡 – The Iconic Ferris Wheel of London</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half text-warning"></i>
                        <span class="ms-2 fw-bold">4.5</span>
                    <p class="card-text mt-4">The London Eye, also known as the Millennium Wheel, is one of the most famous landmarks in London. Offering breathtaking panoramic views of the city, it is a must-visit attraction for tourists!</p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 5  -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/Buckingham Palace.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Buckingham Palace 👑 – The Royal Residence of London
                    </h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half text-warning"></i>
                        <span class="ms-2 fw-bold">4.5</span>
                    <p class="card-text mt-4">Buckingham Palace is the official residence of the British monarch and one of the most iconic landmarks in London. It serves as both the home and administrative headquarters of the King & is famous for its royal ceremonies and stunning architecture.</p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 6 -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/roman forum.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Roman Forum – The Heart of Ancient Rome</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                        <span class="ms-2 fw-bold">4.0</span>
                    <p class="card-text mt-4">The Roman Forum (Foro Romano) was the political, religious, and social center of ancient Rome. Located between the Colosseum and Palatine Hill, it was once a bustling marketplace, a hub for public speeches, and the site of temples, government buildings, and basilicas. </p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 7  -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/greece.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Santorini, Greece  – The Jewel of the Aegean</h3>
                    <i class="fas fa-star  text-warning"></i>
                    <i class="fas fa-star  text-warning"></i>
                    <i class="fas fa-star  text-warning"></i>
                    <i class="fas fa-star  text-warning"></i>
                    <i class="fas fa-star-half  text-warning"></i>
                        <span class="ms-2 fw-bold">4.9</span>
                    <p class="card-text mt-2">Santorini is one of the most beautiful and romantic islands in Greece, known for its whitewashed buildings, blue-domed churches, stunning sunsets, and crystal-clear waters. Located in the Aegean Sea, Santorini is a volcanic island that attracts visitors from all over the world for its breathtaking views, luxurious resorts, and rich history.


                    </p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 8  -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/Sagrada Familia.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Sagrada Familia – The Iconic Masterpiece of Barcelona 🏗️</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                        <span class="ms-2 fw-bold">4.0</span>
                    <p class="card-text mt-4">The Sagrada Familia is one of the most famous landmarks in Spain and a masterpiece of Antoni Gaudí’s architectural genius. Located in Barcelona, this breathtaking basilica is still under construction after more than 140 years and is expected to be completed in 2026 (the centenary of Gaudí’s death).

</p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
        <!-- card 9 -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/vetican.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Vatican City– The World’s Smallest Country </h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                        <span class="ms-2 fw-bold">5.0</span>
                    <p class="card-text mt-4">Vatican City is an independent city-state and the spiritual center of the Roman Catholic Church. It is home to the Pope, the Sistine Chapel, St. Peter’s Basilica, and the Vatican Museums. Despite being the smallest country in the world (0.49 sq km), it holds some of the most significant religious, historical, and artistic treasures.</p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>

        <!-- card 10 -->
        <div class="card mb-5 mt-5 visit-cards" >
            <div class="row g-0">
                <div class="col-md-5">
                <img src="img/duomo.jpeg" class="img-fluid" alt="...">
                </div>
                <div class="col-md-7">
                <div class="card-body">
                    <h3 class="card-title">Duomo di Milano – The Majestic Cathedral of Milan 🏛️</h3>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                        <span class="ms-2 fw-bold">5.0</span>
                    <p class="card-text mt-4">The Duomo di Milano (Milan Cathedral) is one of the largest and most breathtaking cathedrals in the world. Located in the heart of Milan, Italy, this stunning Gothic masterpiece took nearly 600 years to complete and is famous for its intricate façade, towering spires, and panoramic rooftop views.</p>
                    
                    <button type="button" class="btn btn-success">Enquire Now</button>
                
                </div>
                </div>
            </div>
        </div>
        
    </div>


    <?php
    include 'components/footer.php';
    ?>
    
</body>
</html>