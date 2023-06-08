<!DOCTYPE html>
<html>
<head>
    <title>Processing login details</title>
</head>
<body>
<?php

// Redirect to view/homepage.view.php
header('Location: view/homepage.html');

echo "A Splashscreen will be displayed here. Remember.";

// Make this page delay for 5 seconds before redirecting to view/homepage.view.php
header('Refresh: 5; URL=view/homepage.view.php');

?>
</body>
</html>