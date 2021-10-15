<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <table>
        <tr>
        <th>Song Number</th>
        <th>Song Name</th>
        <th>Artist</th>
        <th>Album Name</th>
        <th>Rating</th>
    </tr>   
    <?php

    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "music";

    
    $conn = mysqli_connect("localhost", "root", "", "music");
    $sql = "SELECT * FROM songs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>" . $row["song_number"] . "</td><td>" . $row["song_name"] . "</td><td>". $row["artist"] . "</td><td>" . $row["album_name"] . "</td><td>" . $row["rating"] . "</td></tr>";
        }
    } else{
        echo "no results";
    }

    $conn->close();
    ?>
</table>
    
</body>
</html>
