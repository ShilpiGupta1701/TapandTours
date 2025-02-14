
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
    include 'components/kedarSection.php';
    ?>

    <?php
    include 'components/animations.php';
    ?>

    <!-- things to do cards  -->
    <div class="container-fluid p-4">
        <h1 class="text-center mt-2 mb-2">Things to do in kedarnath</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card " style="width: 35rem;" data-aos="zoom-in-left">
                    <img src="img/trek2.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                        <h2 class=" card-title">Trekking to Kedarnath Temple</h2>
                        <p class="card-text">A 16 km trek from Gaurikund with stunning mountain views.Options: Trek on foot, pony rides, palanquins, or helicopter service.It is one of the most spiritual and adventurous treks in India.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card"  style="width: 35rem;" data-aos="zoom-in-right">
                    <img src="img/wildlife2.png" class="card-img-top" alt=""/>
                    <div class="card-body">
                    <h2 class=" card-title">Nature Walks in Kedarnath Wildlife Sanctuary</h2>
                        <p class="card-text">Explore lush forests, rivers, and rare wildlife like Himalayan black bears and musk deer.Great for photography and birdwatching.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card" style="width: 35rem;" data-aos="zoom-in-left">
                    <img src="img/bhairavnathTrek.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                        <h2 class=" card-title">Trek to Bhairavnath Temple</h2>
                        <p class="card-text">A 500-meter uphill trek from Kedarnath Temple.Offers panoramic views of the surrounding valleys and snow-covered peaks.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card" style="width: 35rem;" data-aos="zoom-in-right">
                    <img src="img/campingKedar.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                    <h2 class=" card-title">Camping in Kedarnath</h2>
                        <p class="card-text">Stay in eco-camps near Kedarnath or at scenic locations like Vasuki Tal.Enjoy bonfires, stargazing, and a peaceful mountain atmosphere.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card" style="width: 35rem;" data-aos="zoom-in-left">
                    <img src="img/helicopter.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                        <h2 class=" card-title">Helicopter Ride to Kedarnath</h2>
                        <p class="card-text">AAvailable from Phata, Guptkashi, or Sersi.A quick and scenic way to reach Kedarnath with aerial views of the Himalayas.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card" style="width: 35rem;" data-aos="zoom-in-right">
                    <img src="img/shankaracharya.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                    <h2 class=" card-title">Meditation at Shankaracharya Samadhi</h2>
                        <p class="card-text">A peaceful spot behind Kedarnath Temple for meditation and spiritual reflection.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card" style="width: 35rem;" data-aos="zoom-in-left">
                    <img src="img/hotsprings.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                        <h2 class=" card-title">Bathing in Gaurikund Hot Springs</h2>
                        <p class="card-text">A natural hot spring at the base of the Kedarnath trek.
                        A refreshing dip before or after the trek.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mx-auto mt-5 mb-5 things-card" style="width: 35rem;" data-aos="zoom-in-right">
                    <img src="img/aartiKedar.jpg" class="card-img-top" alt=""/>
                    <div class="card-body">
                    <h2 class=" card-title">Attend Kedarnath Aarti & Rituals</h2>
                        <p class="card-text">Witness early morning Rudrabhishek Aarti at Kedarnath Temple.
                        Experience the spiritual vibe with chants and prayers.</p>
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