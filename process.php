<?php
include_once 'dbh.php';

$selection = "";
if(isset($_POST['dropbtn'])){
    $selected_val = $_POST['myList'];
    switch ($selected_val ) {
        case 'value1':
            echo 'this is value1<br/>';
			$selection = 'value1';
            break;
        case 'value2':
            echo 'value2<br/>';
			$selection = 'value2';
            break;
        case 'value3':
            echo 'value3<br/>';
			$selection = 'value3';
            break;
        case 'value4':
            echo 'value4';
			$selection = 'value4';
            break;
        default:
            /*this is default*/
            break;
    }
}


$sql = "Insert into nemours ($selection)";//add the extra information
$result = mysqli_query($conn, $sql);
echo "finished";
?>
