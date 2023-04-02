<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <style>

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        table{
            margin-left: auto; 
            margin-right: auto;
        }

        .center {
            text-align: center;
        }

    </style>
</head>
<body>
    <div>
        <table>
            <caption>
                <h2>Course List</h2>
            </caption>
            <tr>
                <th>Course Title</th>
                <th>Course Duration</th>
                <th>Course Type</th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "id20547651_root";
                $password = "og[qRFB}!xD/Y3|B";
                $dbname = "id20547651_ittraininghub";
                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "SELECT * FROM courses";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Query failed: " . $conn->error);
                }

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["Course Title"] . "</td>";
                        echo "<td class=\"center\">" . $row["Course Duration"] . "</td>";
                        echo "<td>" . $row["Course Description"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No courses available.</td></tr>";
                }

                $conn->close();
            ?>
        </table>
    </div>
    
</body>
</html>

