<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user_type = $_POST['user'];
        $full_name = $_POST['fullname'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $gender = $_POST['gender'];
        // database connection code
// echo "Welcome to the stage where we are ready to get connected to a database <br>";
$servername = "localhost";
$username = "id20547651_root";
$password = "og[qRFB}!xD/Y3|B";
$database = "id20547651_ittraininghub";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn)
{
    die("Sorry we failed to connect: ". mysqli_connect_error());
}


        // Assuming your database connection code is working, insert query goes here
        $insert_query = "INSERT INTO registration (Type, `Full name`, Email, Username, Password, Gender) 
                         VALUES ('$user_type', '$full_name', '$email', '$user', '$pass', '$gender')";
        $result = mysqli_query($conn, $insert_query);

        if($result) {
            // echo "Registration Successful!<br>";
            header("Location: index.html");
    exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>