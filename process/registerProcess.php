<?php

if (isset($_POST['register'])) {
    include('../db.php');


    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $name = $_POST['name'];
    $phonenum = $_POST['phonenum'];
    $membership = $_POST['membership'];

    $query_search = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
    
    if(mysqli_num_rows($query_search) != 0) {
        echo
        '<script>
                alert("Email Already Registered");
                window.location = "../page/registerPage.php"
        </script>';
    }else {
        $query = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership)
        VALUES('$email', '$password', '$name', '$phonenum', '$membership')") or die(mysqli_error($con));
        if ($query) {
            echo
            '<script>
                    alert("Register Success"); 
                    window.location = "../index.php"
                    </script>';
        } else {
            echo
            '<script>
                    alert("Register Failed");
                    </script>';
        }
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}