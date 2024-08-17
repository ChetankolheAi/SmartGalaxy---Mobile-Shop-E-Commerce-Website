<?php
// Database connection parameters
include('demo.php');
// Get the search query from the form
if(isset($_POST['query'])){
    echo $search=$_POST['query'];

    $Mobile=$conn->prepare("select * from shopnow where name ='$search'");
    $Mobile->execute();
    $result=$Mobile->fetch_all(MYSQLI_ASSOC);
    print_r($result);


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="#">
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
</body>
</html>