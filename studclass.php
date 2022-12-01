<!DOCTYPE html>
<html>
    <head><title>Calculate Percentage</title></head>
<body>
    <form method="POST">
Enter the name: <input type="text" name="name"><br>
Enter the rollNo: <input type="text" name="rno"><br>
Enter the marks1: <input type="text" name="m1"><br>
Enter the marks2: <input type="text" name="m2"><br>
Enter the marks3: <input type="text" name="m3"><br>
Enter the marks4: <input type="text" name="m4"><br>
Enter the marks5: <input type="text" name="m5"><br>
<input type="submit">
</body>
</html>
<?php 
$name = $_POST["name"];
$rollno = $_POST["rno"];
$m11=$_POST["m1"];
$m12=$_POST["m2"];
$m13=$_POST["m3"];
$m14=$_POST["m4"];
$m15=$_POST["m5"];
$marks = (($m11+$m12+$m13+$m14+$m15)/500)*100;
echo "$name $rno $marks"
?>