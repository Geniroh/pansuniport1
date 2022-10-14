<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt" />
    <meta name="keywords" content="PANS, pharmacy, pharmaceutical association of Nigerian Student" />
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <meta name="theme-color" content="#04018D" />
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <title>PANS UNIPORT</title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Pharmaceutical Association of Nigerian Student (PANS) Uniport" />
    <meta property="og:url" content="https://www.pansuniport.com" />
    <meta property="og:description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt Chapter" />
    <meta name="description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt." />
    <meta property="og:site_name" content="PANSUNIPORT" />
    <meta property="og:image" content="https://www.pansuniport.com/pans-logo.jpg" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="400" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="Pharmaceutical Association of Nigerian Student (PANS), University of Port Harcourt Chapter" />
    <meta name="twitter:image" content="https://www.pansuniport.com/pans-logo.jpg" />
    <meta name="twitter:description"
        content="The Pharmaceutical Association of Nigerian Student (PANS) is the representative body of the prestigious faculty of Pharmaceutical sciences, University of Port Harcourt Chapter." />
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/floating-labels.css">

</head>

<body>
    <?php

    $selector = $_GET["selector"];
    $validator = $_GET["validator"];

    if(empty($selector) || empty($validator)){
        echo "<script> alert('We could not validate your request. Try Again')</script>";
    } else{
        if(ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false){
    ?>

    <form class="form-signin" action="includes/reset_password.php" method="post">
        <div class="text-center mb-4">
            <img class="mb-4" src="assets/img/pans-logo.jpg" alt="" width="200" height="100">
            <h1 class="h3 mb-3 font-weight-normal">Reset your Password</h1>
        </div>

        <div class="form-control">
            <input type="hidden" name="selector" value="<?php echo $selector ?> ">
            <input type="hidden" name="validator" value="<?php echo $validator ?> ">
        </div>

        <div class="form-label-group">
            <input type="password" id="user_pwd" name="user_pwd" class="form-control" placeholder="Enter New Password" required>
            <label for="password">Enter New Password</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="user_pwdCheck" class="form-control" placeholder="Repeat Password" required>
            <label for="password">Repeat New Password</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="reset_password_submit">Reset Password</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2022</p>
    </form>

    <?php
        }
    }
    ?>
  
       
</body>
</html>