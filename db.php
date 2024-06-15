<?php

$db = mysqli_connect('localhost','root','','mydb');
if(!($db))
{
    echo "DB Connection failed";
}
?>