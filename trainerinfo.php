<!DOCTYPE html>
<html>
    <head>
        <title>IT Training Hub</title>
        <link rel="stylesheet" type="text/css" href="styled.css">
    </head>
    <body>
        <h1>Current Participent</h1>

        <form method="get" action="trainerinfo.php">
            <label for="type">Select a Type:</label>
            <select id="type" name="type">
                <option value="trainer">Trainer</option>
                <option value="trainee">Trainee</option>
            </select>
            <br>
            <input type="submit" value="Search">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
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

            $type = $_GET["type"];

            // Prepare and execute the SQL query
            $sql = "SELECT * FROM registration WHERE Type = '$type'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                echo "<table>";
                echo "<tr><th>Full Name</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["Full Name"]. "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "No results found.";
            }

            $conn->close();
        }
        ?>
        <section>
    <section class="hero">
		<div class="hero-content">
			<h1>You can go to home after getting desired list</h1>
			<a href="/index.html" class="btn">Home</a>
		</div>
	</section>
    </body>
</html>
