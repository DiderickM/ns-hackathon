<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/table.css" />
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>
<?php

include_once('../conn.php');

$sql = "SELECT * FROM incidents WHERE afgetekend = 0 ORDER BY id ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='rwd-table'><tbody><tr><th>Coupe</th><th>Datum</th><th>Aard</th><th>Commentaar</th><th>Afgehandeld</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td data-th='Coupe'>";
        if ($row['foto'] != "") {
            echo "<a style=\"color: #444\" href=\"../files/" . $row["foto"] . "\">";
        }
        echo $row["coupe"] . "</a></td><td data-th='date'>" . $row["date"] ."</td><td data-th='aard'>" . $row["aard"] ."</td><td data-th='toevoeging'>" . $row["toevoeging"] . '<td data-th="Afandelen "><a style="color: #444" href="../data_afhandelen.php?id=' . $row['id'] . '">Afhandelen</a></td></tr>';
    }
    echo '</tbody></table>';
} else {}
?>