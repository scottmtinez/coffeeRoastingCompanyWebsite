<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Coffee Roasting Company</title>
</head>
<body class="body-container">
    <?php 
        include("nav.php"); 
        include("account.php");
        include("cart.php");
    ?>

    <div class="">

    </div>

    <?php include("footer.php"); ?>
</body>
</html>
