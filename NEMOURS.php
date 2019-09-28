<?php
include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>nemours</title>
</head>
<body style="background-color:red;">
<h1>Social Stories</h1>
<p> Series of social stories</p>



<p><a href=doggo1 src ="http://localhost/html/imageTest1.php"\n>
        Boy child gets an x-ray</a></p>

<p><a href=doggo2 src ="http://localhost/html/imageTest2.php"\n>
        Girl child gets an x-ray</a></p>

<p><a href=doggo3 src ="http://localhost.html/imageTest3.php"\n>
        Boy teen gets a cast</a></p>

<p><a href=doggo4 src ="http://localhost.html/imageTest4.php"\n>
        Girl teen gets a cast</a></p>

<p><a href=doggo5 src ="http://localhost.html/imageTest5.php"\n>
        Boy gets a shot</a></p>


<body>
<form action="process.php" method="post">
    <fieldset>
        <legend>Selecting elements</legend>
        <p>
            <label>Select list</label>
            <select name = "myList">

                <div class="dropdown">
                    <button class="dropbtn">Dropdown</button>
                    <div class="dropdown-content">
                        <option value = "value1">Boy</option><br/>
                        <option value = "value2">Girl</option><br/>
                        <option value = "value3">Child</option><br> ><br/>
                        <option value = "value4">Teen</option><br/>

            </select>
            <input type="submit" name="submit" value="get selected values"/>
    </fieldset>

</form>
<?php
$sql = "SELECT * FROM child;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    echo "Made it here";
    while ($row = mysqli_fetch_assoc($result)){
        echo $row[child_first_name] . "<br>";
    }
}
?>
</body>

<form action="getName.php" method ="POST">
    <p> Name:
        <input type = input type="text" name="username" required>
        <br>
</form>width: 95%; height:90px;background-color:blue;color:red;border:none;
padding:3%;font:22px/30px sans-serif; <element onscroll="myS
