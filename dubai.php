


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
        include 'components/dubaiGallery.php';
      ?>

       <!-- kedar-section div  -->
      <?php 
        include 'components/dubaiSection.php';
      ?>

      <!-- content  -->
      <div class="container-fluid mb-4">
            <h1 class="ms-5 mb-4 pt-5 text-dark text-center">Ultimate Dubai Travel Guide 🌍✈️</h1>
            <p class="ms-5 pt-2 pb-2 text-secondary">Dubai is a vibrant, modern city that offers a unique blend of traditional Arabian culture and futuristic architecture. Whether you're there for business or leisure, Dubai has something for everyone—luxury shopping, world-class dining, spectacular attractions, and a rich history.</p>

            <h4 class="ms-5 pt-2 text-dark">⏳ Best Time to Visit Dubai</h4>
              <p class="ms-5 text-secondary"><strong>April to October – </strong>The heat can be intense, with temperatures reaching over 40°C (104°F), making it best to enjoy indoor attractions or beach resorts.
              </p>
              <p class="ms-5 text-secondary"><strong>November to March – </strong>The cooler months are ideal for outdoor activities and exploring the city.
              </p>
              
            <h4 class="ms-5 pt-2 text-dark ">🚆 Best Ways to Travel Around Dubai</h4>
              <p class="ms-5 text-secondary"><strong>Metro – </strong>The Dubai Metro is a quick, efficient, and affordable way to get around the city.</p>
              <p class="ms-5 text-secondary "><strong>Taxis – </strong>Widely available and affordable, though traffic can be heavy during peak hours.

              </p>
              <p class="ms-5 text-secondary"><strong>Car Rentals – </strong>Renting a car is a good option for flexibility, but parking can be expensive in some areas.
              </p>
              <p class="ms-5 text-secondary"><strong>Water Taxis – </strong>A fun way to navigate Dubai Creek and the Marina.

              </p>
            
            <h4 class="ms-5 pt-2 text-dark ">🐟 Outdoor Activities</h4>
             <p class="ms-5 text-secondary"><strong>Beachfront – </strong>Dubai has several beautiful beaches, including JBR Beach and Kite Beach, with water sports available. </p>
              <p class="ms-5 text-secondary"><strong>Dubai Creek – </strong>Take an abra ride (traditional boat) to see the older parts of the city, like Deira and Bur Dubai.</p>
              <p class="ms-5 text-secondary "><strong>Dubai Parks and Resorts – </strong>A large complex with theme parks like Legoland, Motiongate, and Bollywood Parks.</p>

            <h4 class="ms-5 pt-2 text-dark ">🛏️ Where to Stay?</h4>
              <p class="ms-5 text-secondary"><strong>Budget(Under AED 500 per night): </strong>Ibis One Central: Modern, budget-friendly hotel in the heart of Dubai.
              Holiday Inn Express Dubai: Affordable with free breakfast and easy access to business areas.
              </p>
              <p class="ms-5  text-secondary "><strong>Mid-range (AED 500-1,500 per night): </strong>Jumeirah Creekside Hotel: A stylish, family-friendly hotel with great amenities.
              Rove Downtown: Affordable comfort near Burj Khalifa and Dubai Mall.

              </p>
              <p class="ms-5 text-secondary"><strong>Luxury (AED 1,500+ per night): </strong>Burj Al Arab Jumeirah: The iconic 7-star hotel with stunning views and world-class service.
              Atlantis The Palm: A lavish resort on Palm Jumeirah with a waterpark and private beach.
              </p>
             

            <h4 class="ms-5 pt-2 text-dark ">🏰 Places to Visit in Dubai:</h4>
              <p class=" ms-5 text-secondary"><strong>Burj Khalifa – </strong>The world’s tallest building, offering stunning views from its observation deck. Don't miss the fountain show at its base.</p>
              <p class="ms-5  text-secondary "><strong>The Dubai Mall – </strong>One of the largest shopping malls in the world, with everything from high-end brands to an aquarium and an ice rink.</p>
              <p class="ms-5 text-secondary"><strong>Palm Jumeirah – </strong>An artificial island shaped like a palm tree, home to luxury resorts, restaurants, and the famous Atlantis hotel.

              </p>
              <p class="ms-5 text-secondary"><strong>Dubai Marina – </strong>A lively waterfront area, perfect for dining and walking, with yachts lining the harbor.

              </p>
              <p class="ms-5 text-secondary"><strong>Dubai Desert Safari – </strong>Take a thrilling ride across the dunes and experience camel rides, traditional performances, and a BBQ under the stars.
              </p>
              <p class="ms-5  text-secondary"><strong>Al Fahidi Historic District (Al Bastakiya) – </strong>Explore Dubai’s history with its preserved traditional wind-tower architecture and museums.</p>
              <p class="ms-5  text-secondary"><strong>Dubai Museum – </strong>Located in the Al Fahidi Fort, this museum offers insights into the city's history and culture.</p> 
              <p class="ms-5 text-secondary mb-5"><strong>Jumeirah Mosque – </strong>One of the most beautiful mosques in Dubai, open for guided tours to promote cultural understanding.</p>
              
              
      </div>

    </section>
   
    <!-- Footer -->
    <?php 
    include 'components/footer.php';
    ?>
    <!-- Footer -->
      
</body>
</html>