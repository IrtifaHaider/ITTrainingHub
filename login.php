<?php
$login = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_POST['username'];
        $pass = $_POST['password'];
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
else{
    // echo "Connection was successful<br>";
}


        // Assuming your database connection code is working, insert query goes here
        $query = "SELECT * FROM registration WHERE Username = '$user' AND Password = '$pass'";
        $result = mysqli_query($conn, $query);
        $num = mysqli_num_rows($result);

        if($num==1) {
            // echo "Login Successful!<br>";
            header("Location: course.html");
            exit();
            
        } else {
            echo "Errorrrr: " . mysqli_error($conn);
        }
    }
?>