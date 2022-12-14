<?php
    if (isset($_POST['reset_request_submit'])) {

        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "www.pansuniport.com/create_new_password.php?selector=".$selector ."&validator=". bin2hex($token);

        $expires = date("U") + 900;

        require 'db.php';

        $userEmail = $_POST["email"];

        $sql = "DELETE FROM passwordReset WHERE pwdResetEmail=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "There was an error";
            exit();
        } else{
            mysqli_stmt_bind_param($stmt, "s", $userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql2 = "INSERT INTO passwordReset (pwdResetEmail, pwdResetSelector, pwdResetToken, pwdResetExpires) VALUES (?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql2)){
            echo "There was an error";
            exit();
        } else{
            $hashedToken = password_hash($token, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
            mysqli_stmt_execute($stmt);
        }

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $to = $userEmail;

        $subject = "Reset your password for pansuniport";

        $message = '<p>We received a password reset request. The link to reset your password is below. If you did not make this request, you can ignore this email</p>'; 

        $message .= '<p>Here is your password reset link: </br>';
        $message .= '<a href="'. $url .'">' . $url . '</a></p>';

        $headers = "From: Pansuniport <help@pansuniport.com> \r\n";
        $headers .= "Reply-To: help@pansuniport.com\r\n";
        $headers .= "Content-type: text/html\r\n";

        mail($to, $subject, $message, $headers);

        header("Location: ../login.php?reset=success");

    } else {
        header("Location: ../login.php");
        exit();
    }