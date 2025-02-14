
<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Packages</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap 5 JS (Required for toggling navbar in mobile) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS (Required for Navbar & Dropdowns) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<?php
include 'components/header.php';
?>

<div class="container mt-5">
    <h1 class="mb-4 mt-4 text-center">All Tour Packages</h1>

    <!-- 🔽 Filter Section -->
    <div class="row mb-4 mt-4">
        <div class="col-md-4">
            <label>Location:</label>
            <select id="locationFilter" class="form-control">
                <option value="">All Locations</option>
                <option value="Maldives">Maldives</option>
                <option value="Himachal">Himachal</option>
                <option value="Thailand">Thailand</option>
                <option value="Kashmir">Kashmir</option>
                <option value="Dubai">Dubai</option>
                <option value="Europe">Europe</option>
                <option value="Goa">Goa</option>
                <option value="Kerala">Kerala</option>
                <option value="Rajasthan">Rajasthan</option>
            </select>
        </div>

        <div class="col-md-4">
            <label>Budget (Max Price in Rs.):</label>
            <input type="number" id="budgetFilter" class="form-control" placeholder="Enter max budget">
        </div>

        <div class="col-md-4">
            <label>&nbsp;</label>
            <button class="btn btn-primary btn-block" onclick="filterPackages()">Apply Filters</button>
        </div>
    </div>

    <!-- 🔽 Packages Display Section -->
    <div id="packagesContainer" class="row">
        <?php
        $sql = "SELECT * FROM tour_packages";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card package-card">
                        <img src="<?= $row['image'] ?>" class="card-img-top" alt="Package Image">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['name'] ?></h5>
                            <p><strong>Location:</strong> <?= $row['location'] ?></p>
                            <p><strong>Duration:</strong> <?= $row['duration'] ?></p>
                            <p><strong>Price:</strong> Rs.<?= number_format($row['price']) ?></p>
                            <a href="package_details.php?id=<?= $row['id'] ?>" class="btn btn-info">View Details</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No packages available.</p>";
        }
        ?>
    </div>
</div>

<?php
include 'components/footer.php';
?>

<script>
function filterPackages() {
    let location = $('#locationFilter').val();
    let budget = $('#budgetFilter').val();

    $.ajax({
        url: 'fetch_packages.php',
        method: 'GET',
        data: { location: location, budget: budget },
        success: function(response) {
            $('#packagesContainer').html(response);
        }
    });
}
</script>


</body>
</html>
