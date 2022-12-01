<?php
error_reporting(0);
$ab=$_POST['a'];
if(isset($_POST['submit']))
{
if($ab<1500)
{
    $Gs = $ab + ($ab * 0.10) + ($ab * 0.9);
    echo " THe Gross salary is $Gs";
}
else if($ab>=1500)
{
    $Gs = $ab + 500 + ($ab * 0.98);
    echo "The Gross Salary is  $Gs"; 
}
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
    Salary Calculator
    </title></head>
    <body>
        <form method="POST">
Enter the basic sal = <input type="text" name="a"><br>
<input type="Submit" name="submit">
</form>
    </body>
    </html>
