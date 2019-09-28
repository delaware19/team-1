<?php
include_once 'dbh.php';

$tablename = "child";
$firstname = "john";
$gender = "male";
$agebracket = "child";
$ethnicity = "hispanic";
if(isset($_POST['dropbtn'])){
    $selected_val = $_POST['myList'];
    switch ($selected_val ) {
        case 'value1':
            echo 'this is value1<br/>';
			$gender = 'value1';
            break;
        case 'value2':
            echo 'value2<br/>';
			$gender = 'value2';
            break;
        case 'value3':
            echo 'value3<br/>';
			$agebracket = 'value3';
            break;
        case 'value4':
            echo 'value4';
			$agebracket = 'value4';
            break;
        default:
            /*this is default*/
            break;
    }
}

echo "Insert into $tablename('child_first_name', 'child_gender', 'child_age_bracket', 'child_ethnicity') VALUES ($firstname, $gender, $agebracket, $ethnicity)";
$sql = "Insert into $tablename(child_first_name, child_gender, child_age_bracket, child_ethnicity) VALUES ('$firstname', '$gender', '$agebracket', '$ethnicity')";
if ($conn->query($sql)=== TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}

$result = mysqli_query($conn, $sql);
#mysqli_commit(mysqli $link [, int $flags = 0[, string $name ]] ) : bool
echo "finished";
?>
