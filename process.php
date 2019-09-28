<?php
if(isset($_POST['dropbtn'])){
    $selected_val = $_POST['myList'];
    switch ($selected_val ) {
        case 'value1':
            echo 'this is value1<br/>';
            break;
        case 'value2':
            echo 'value2<br/>';
            break;
        case 'value3':
            echo 'value3<br/>';
            break;
        case 'value4':
            echo 'value4';
            break;
        default:
            /*this is default*/
            break;
    }
}
?>
