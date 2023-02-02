<?php
//Load all files from _templates
function load($page){
    include __DIR__ ."/../_template/$page.php";
}

//Load all tittles
function load_title($title){
    print "<title>$title</title>";
}

//Creating a function >> signup

function signup($username, $email_address, $password, $phone){
    //Database login
    $servername = "localhost";
    $usernames = "root";
    $passwords = "agri";
    $dbname = "agricreation_login";
    $con = new mysqli($servername, $usernames, $passwords, $dbname);
        // Checking a connections
        if ($con->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        //Inserting data into a database
$sql= "INSERT INTO `signup` (`username`, `phone`, `email_address`, `password`)
VALUES ('$username', '$phone', '$email_address', '$password')";
    if ($con->query($sql) === true) {
        $error = false;
    } else {
        // echo "Error: " . $sql . "<br>" . $conn->error;
        $error = $con->error;
    }

    $con->close();
    return $error;
}
// signup("usernamers","passwords","email","phone");
?>