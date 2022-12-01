<?php
$time  = date("H");
$timezone = date("e");
if($time<12){
    echo "Good Morning";
}
else if($time >= "12" && $time<=17)
{
    echo "Good Afternoon";
}
else if($time >= 17 && $time <="19")
{
    echo "Good Evening";
}
else if($time >= 19)
{
    echo "Good Night";
}
?>