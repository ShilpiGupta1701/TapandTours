<style>
.navbar {
    background-color: #212121;
    color: white;
    font-size: 17px;
}

.navbar-nav {
   text-align: right !important;
  
}


.nav-item .nav-link {
    font-size: 17px;
    font-family: "Poppins", serif;
    color: #ffffff;
}

.nav-item .nav-link:hover {
    color: #9B7EBD;
}

.navbar .navbar-brand {
    color: #D4BEE4;
    font-size: 35px;
    font-family: "Poppins", serif;
}

.dropdown-menu {
    max-height: 300px;
    overflow-y: auto;
}

@media (max-width: 992px) {
    .navbar-nav {
        text-align: right !important;
    }

    .navbar-collapse {
        background-color: #212121;
        padding: 10px;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url('data:image/svg+xml;charset=UTF8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30" height="30" fill="white"%3E%3Cpath stroke="white" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
    }
}
</style>

<div class="sticky-top">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <!-- Brand Logo -->
      <a class="navbar-brand ms-3" href="index.php">
        <img src="img/airplane.png" width="65" height="65" class="d-inline-block align-top ms-1" alt="">
        TapAndTours
      </a>

      <!-- Navbar Toggle Button (for mobile) -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-2"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item me-2"><a class="nav-link" href="about.php">About</a></li>
          <li class="nav-item me-2"><a class="nav-link" href="allPackages.php">Packages</a></li>

          <!-- Domestic Trips Dropdown -->
          <!-- <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" id="domesticTrips" role="button" data-bs-toggle="dropdown" aria-expanded="false">Domestic Trips</a>
            <ul class="dropdown-menu" aria-labelledby="domesticTrips">
              <li><a class="dropdown-item" href="kedarnath.php">Kedarnath</a></li>
              <li><a class="dropdown-item" href="#">Goa</a></li>
              <li><a class="dropdown-item" href="#">Kerala</a></li>
              <li><a class="dropdown-item" href="#">Himachal</a></li>
              <li><a class="dropdown-item" href="#">Kashmir</a></li>
              <li><a class="dropdown-item" href="#">Mussoorie</a></li>
              <li><a class="dropdown-item" href="#">Rajasthan</a></li>
            </ul>
          </li> -->

          <!-- International Trips Dropdown -->
          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" id="internationalTrips" role="button" data-bs-toggle="dropdown" aria-expanded="false">International Trips</a>
            <ul class="dropdown-menu" aria-labelledby="internationalTrips">
              <li><a class="dropdown-item" href="europe.php">Europe</a></li>
              <li><a class="dropdown-item" href="dubai.php">Dubai</a></li>
              <li><a class="dropdown-item" href="russia.php">Russia</a></li>
              <li><a class="dropdown-item" href="#">Maldives</a></li>
              <li><a class="dropdown-item" href="#">Malaysia</a></li>
              <li><a class="dropdown-item" href="#">Hong-kong</a></li>
              <li><a class="dropdown-item" href="#">Turkey</a></li>
              <li><a class="dropdown-item" href="#">Egypt</a></li>
              <li><a class="dropdown-item" href="#">Mauritius</a></li>
              
            </ul>
          </li>

          <!-- Activities Dropdown -->
          <li class="nav-item dropdown me-2">
            <a class="nav-link dropdown-toggle" href="#" id="activities" role="button" data-bs-toggle="dropdown" aria-expanded="false">Activities</a>
            <ul class="dropdown-menu" aria-labelledby="activities">
              <li><a class="dropdown-item" href="#">Parties & Shows</a></li>
              <li><a class="dropdown-item" href="#">Water Activities</a></li>
              <li><a class="dropdown-item" href="#">Air Activities</a></li>
              <li><a class="dropdown-item" href="#">Mountain Activities</a></li>
              <li><a class="dropdown-item" href="#">Snow Activities</a></li>
              <li><a class="dropdown-item" href="#">Bonfires</a></li>
              <li><a class="dropdown-item" href="#">Treks</a></li>
            </ul>
          </li>

          <li class="nav-item me-3"><a class="nav-link" href="contact.php">Contact Us</a></li>
        </ul>

         <!-- Call Icon (aligned right) -->
        <!-- <a class="navbar-brand d-lg-block d-none" href="#">
          <img src="img/phone-call.png" width="40" height="40" class="d-inline-block mt-2 mb-2" alt="">
        </a> -->

      </div>
    </div>
  </nav>
</div>

<!-- Bootstrap JS (Required for Navbar & Dropdowns) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  let navbarToggler = document.querySelector(".navbar-toggler");
  let navbarCollapse = document.querySelector("#navbarNavDropdown");
  let dropdownToggles = document.querySelectorAll(".dropdown-toggle");

  navbarToggler.addEventListener("click", function() {
    let isExpanded = this.getAttribute("aria-expanded") === "true";
    this.setAttribute("aria-expanded", !isExpanded);
    navbarCollapse.classList.toggle("show");
  });

  dropdownToggles.forEach(function(dropdown) {
    dropdown.addEventListener("click", function(event) {
      event.preventDefault();
      let dropdownMenu = this.nextElementSibling;
      dropdownMenu.classList.toggle("show");
    });
  });
});
</script>