

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TapAndTours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    
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
    <?php 
    include 'components/header.php';
    ?>
    

    <!-- mAIN content -->
    <section>

       <!-- carousel  -->
      <?php 
        include 'components/europeGallery.php';
      ?>

       <!-- kedar-section div  -->
      <?php 
        include 'components/europeSection.php';
      ?>

      <!-- content  -->
      <div class="container-fluid ">
            <h1 class="ms-5 mb-4 pt-5 text-dark text-center">Ultimate Europe Travel Guide 🌍✈️</h1>
            <p class="ms-5 pt-2 pb-2 text-secondary">Europe is a dream destination for travelers, offering a mix of history, culture, food, and breathtaking landscapes. Whether you’re exploring charming old towns, vibrant cities, or stunning natural wonders, Europe has something for everyone.</p>

            <h4 class="ms-5 pt-2 text-dark">⏳ Best Time to Visit Europe</h4>
              <p class="ms-5 text-secondary"><strong>Spring (March-May): </strong>Fewer crowds, pleasant weather
              </p>
              <p class="ms-5 text-secondary"><strong>Summer (June-August): </strong>Peak season, warmest weather but crowded
              </p>
              <p class="ms-5 text-secondary"><strong>Autumn (September-November): </strong>Great for wine regions, fewer tourists
              </p>
              <p class="ms-5 text-secondary"><strong>Winter (December-February): </strong>Christmas markets, skiing, Northern Lights
              </p>

            <h4 class="ms-5 pt-2 text-dark ">🚆 Best Ways to Travel Around Europe</h4>
              <p class="ms-5 text-secondary"><strong>Train (Eurail/Interrail Pass) – </strong>Best for scenic routes and flexibility</p>
              <p class="ms-5 text-secondary "><strong>Budget Airlines (Ryanair, EasyJet, Wizz Air) – </strong>Cheap flights across Europe
              </p>
              <p class="ms-5 text-secondary"><strong>Buses (FlixBus, Eurolines) – </strong>Affordable but slower than trains
              </p>
              <p class="ms-5 text-secondary"><strong>Car Rental/Road Trips – </strong>Great for exploring countryside & off-the-beaten-path locations
              </p>
            
            <h4 class="ms-5 pt-2 text-dark ">🍽️ Must-Try Foods in Europe</h4>
             <p class="ms-5 text-secondary">Pizza & Pasta (Italy) 🍕🍝
             </p>
              <p class="ms-5 text-secondary">Croissants & Escargots (France) 🥐🐌</p>
              <p class="ms-5 text-secondary ">Paella & Tapas (Spain) 🥘🍷</p>
              <p class="ms-5 text-secondary">Schnitzel & Pretzels (Germany/Austria) 🥨🍺</p>
              <p class="ms-5 text-secondary">Fish & Chips (UK) 🐟🍟</p>
              <p class="ms-5 text-secondary">Goulash (Hungary) 🍲</p>

            <h4 class="ms-5 pt-2 text-dark ">🛏️ Where to Stay?</h4>
              <p class="ms-5 text-secondary"><strong>Budget: </strong>Hostels, Couchsurfing, Airbnb private rooms
              </p>
              <p class="ms-5  text-secondary "><strong>Mid-range: </strong>Boutique hotels, B&Bs, guesthouses
              </p>
              <p class="ms-5 text-secondary"><strong>Luxury: </strong>5-star hotels, resorts, villas
              </p>
             

            <h4 class="ms-5 pt-2 text-dark ">🏰 Places to Visit in Europe:</h4>
              <p class=" ms-5 text-secondary"><strong>Paris, France 🇫🇷 – </strong>Eiffel Tower, Louvre, and charming cafés</p>
              <p class="ms-5  text-secondary "><strong>London, UK 🇬🇧 – </strong>Buckingham Palace, Big Ben, and diverse neighborhoods</p>
              <p class="ms-5 text-secondary"><strong>Rome, Italy 🇮🇹 – </strong>Colosseum, Vatican City, and authentic Italian cuisine
              </p>
              <p class="ms-5 text-secondary"><strong>Barcelona, Spain 🇪🇸 – </strong>Sagrada Familia, beaches, and tapas
              </p>
              <p class="ms-5 text-secondary"><strong>Amsterdam, Netherlands 🇳🇱 – </strong>Canals, museums, and cycling culture</p>
              <p class="ms-5  text-secondary"><strong>Zurich, Switzerland 🇨🇭 – </strong>Stunning lakes, Swiss chocolate, and luxury shopping</p>
              <p class="ms-5  text-secondary"><strong>Berlin, Germany 🇩🇪 – </strong>Historic sites, nightlife, and modern culture</p> 
              <p class="ms-5 text-secondary"><strong>Santorini, Greece 🇬🇷 – </strong>White-washed buildings, sunsets, and beaches</p>
              
              
      </div>

    </section>
   
    <!-- Footer -->
    <?php 
    include 'components/footer.php';
    ?>
    <!-- Footer -->
      
</body>
</html>