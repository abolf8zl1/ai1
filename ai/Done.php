<head>
    <link rel="stylesheet" type="text/css" href="../ai/recorces/css/bootstrap.css">
    <title>logged in</title>
</head>
<?php
session_start();
echo "<p class='alert alert-success container col-3 text-center'>";
echo $_SESSION['message'];
echo "</p>";
session_destroy();