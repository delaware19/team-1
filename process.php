<?php
include_once 'dbh.php';

$tablename = "child";
$gender = "";
$agebracket = "";
$ethnicity = "";
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


<<<<<<< HEAD
$sql = "Insert into nemours, $tablename($gender, $agebracket, $ethnicity)";//add the extra information
=======
$sql = "Insert into nemours ($selection)";//add the extra information
>>>>>>> b53a7f3bd10430927e8efc91dd95199040fb062e
$result = mysqli_query($conn, $sql);
echo "finished";
?>
