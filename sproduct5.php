<?php
// Assuming 'demo.php' contains your database connection logic
include('demo.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <style>
        /* Basic CSS for styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .action-links {
            display: flex;
            gap: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Assuming $conn is your database connection object established in 'demo.php'
                $H="<h1> hello </h1>";
               
                // Perform SQL query to fetch products
                $query = "SELECT * FROM products";
                $result = mysqli_query($conn, $query);

                // Check if there are any rows returned
                if(mysqli_num_rows($result) > 0){
                    // Loop through each row of results
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>" ."1" . "</td>"; // Replace 'id' with your actual column name for product ID
                        echo "<td>Image</td>"; // Replace with actual image display logic
                        echo "<td>" . $row['name'] . "</td>"; // Replace 'product_name' with your actual column name for product name
                        echo "<td>" . $row['price'] . "</td>"; // Replace 'product_price' with your actual column name for product price
                        echo "<td class='action-links'>";
                        echo "<a href='#'><i class='fas fa-trash'></i></a>"; // Replace '#' with actual delete functionality
                        echo "<a href='#'><i class='fas fa-edit'></i></a>"; // Replace '#' with actual edit functionality
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No products found.</td></tr>";
                }
                echo $H;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
