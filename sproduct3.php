<?php
session_start();
$htmlContent = "<p id='hello'>This is a paragraph with a dynamic ID.</p>";

// Extract the text content from the HTML
$dom = new DOMDocument;
@$dom->loadHTML($htmlContent);
$textContent = $dom->getElementsByTagName('p')->item(0)->textContent;

// Output the text content
echo $textContent;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Text Color on Click</title>

</head>
<body>
<form method="POST">
        <h1>Logout</h1>
        <button type="submit" class="btn">Logout</button>
</form>

</body>
</html>
