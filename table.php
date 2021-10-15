<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
        table {
            border-collapse: collapse;
            width: 100%;
            color: pink;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
        }

        th {
            background-color: green;
            color: while;
        }
        </style>
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
