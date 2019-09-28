<?php
    include 'mysqlconnection.php';
    $sql = "SELECT post_text FROM post";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "post text: " . $row["post_text"].  "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>