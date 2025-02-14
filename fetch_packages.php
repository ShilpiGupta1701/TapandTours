

<?php
include 'db.php';

$location = isset($_GET['location']) ? $_GET['location'] : '';
$budget = isset($_GET['budget']) ? (int)$_GET['budget'] : 0;

$sql = "SELECT * FROM tour_packages WHERE 1";

if (!empty($location)) {
    $sql .= " AND location = '$location'";
}

if ($budget > 0) {
    $sql .= " AND price <= $budget";
}

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
    echo "<p>No packages found.</p>";
}

$conn->close();
?>
