<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>

<body>
    <h1>Search Results</h1>
    <?php
    if (isset($_SESSION['search_results']) && !empty($_SESSION['search_results'])) {
        $results = $_SESSION['search_results'];
        foreach ($results as $index => $row) {
            echo "<p>" . ($index + 1) . ". Product name: " . $row['name'] . ", Price: $" . $row['price'] . ", Image: " . $row['image'] . "</p>";
        }
    } else {
        echo "<p>No results found.</p>";
    }

    // Clear session data after displaying results
    unset($_SESSION['search_results']);
    ?>
</body>

</html>
