<?php
// database configuration
$servername = "localhost";
$username = "id20547651_root";
$password = "og[qRFB}!xD/Y3|B";
$database = "id20547651_ittraininghub";

// establish database connection
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// execute the query and fetch the data
$sql = "SELECT * FROM registration WHERE Type = 'trainer'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table>";
    echo "<tr><th>Full Name</th>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["Full Name"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No trainers found.";
}

mysqli_close($conn);
?>
