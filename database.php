<?php
 
$link = mysqli_connect("localhost","qdhseri1","Yie26e0aV3","qdhseri1_mydatabase");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else{
    echo " connected to MySQL." ;
    
}
$sql = "INSERT INTO account (Email, AccountName, Password) VALUES ('$_POST[Email]', '$_POST[AccountName]', '$_POST[Password]')" ;
echo $sql;
if (!mysqli_query($link, $sql)){
    echo "inserting into database failed";/// add something to show that there was a problem
}else{
echo "<script> alert('Welcome, you have your account'); history.go(-2)</script>";
}

?>