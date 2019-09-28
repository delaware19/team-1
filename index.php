<?php
include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>nemours</title>
</head>
<body>
<h1>Social Stories</h1>
<p> Series of social stories</p>
<p>Here is a link to wikiHow: <a href="http://localhost/html/imageTest1.php">
        Hello World</a></p>

<textarea name="text" cols="25" rows="5">
Please enter name
</textarea>

<?php
$sql = "SELECT * FROM account;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo $row['acct_username'] . "<br>";
    }
}
?>

</body>

<textarea
    style="width: 95%; height:90px;background-color:blue;color:red;border:none;
padding:3%;font:22px/30px sans-serif; <element onscroll="myScript">
