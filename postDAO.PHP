<?php
    include 'dbh.php';
    public function getAllText(){
        if ($result->num_rows > 0) {
            // output data of each row

            $sql = "SELECT post_text FROM post";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                echo "post text: " . $row["post_text"].  "<br>";
            }
        } else {
            echo "0 results";
        }
    $conn->close();
    }
    public function getFilteredTextGender(){
        $sql = $conn->prepare("SELECT post_text FROM post inner join child WHERE child_gender = ?");
        if($sql->execute(array($_GET('child_gender')))){
            while ($row = $sql-> fetch()){
                print_r($row);
            }
        }
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
                echo "post text: " . $row["post_text"]. "<br>";
        }
    $conn->close();
}

?>