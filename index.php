<?php
    include('./config/database.php');

    $sql = "SELECT * FROM room WHERE Room_ID LIKE '1'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            echo $row['Room_ID'] . "<br/>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>