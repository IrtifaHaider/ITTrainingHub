<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database configuration
    $servername = "localhost";
    $username = "id20547651_root";
    $password = "og[qRFB}!xD/Y3|B";
    $dbname = "id20547651_ittraininghub";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the insert statement
    $stmt = $conn->prepare("INSERT INTO courses (`Course Title`, `Course Description`, `Course Duration`) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $title, $description, $duration);

    // Set parameters and execute
    $title = $_POST["title"];
    $description = $_POST["description"];
    $duration = $_POST["duration"];

    if ($stmt->execute() === TRUE) {
        // echo "Course added successfully!";
        header("Location: logout.html");
            exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
