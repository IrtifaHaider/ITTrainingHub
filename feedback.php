<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        // database connection code
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
        $insert_query = "INSERT INTO feedbacks (Name, Email, Feedback) 
                         VALUES ('$name', '$email', '$feedback')";
        $result = mysqli_query($conn, $insert_query);

        if($result) {
            header("Location: index.html");
    exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>