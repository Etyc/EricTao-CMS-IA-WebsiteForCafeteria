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

$sql = "SELECT * FROM account WHERE Email='$_POST[Email]' and Password='$_POST[Password]'";
echo $sql;


$result = mysqli_query( $link, $sql);
        $row = mysqli_fetch_array($result);
        if(!$row){
            echo "<div>";
            echo "Error: No Existing User or Passward is Wrong!";
            echo "</div>";
            }
        else{
            printf ("%s %s", $row[0], $row[1]);
            echo "\n";
            /*$loggedIn = true;*/
            echo "Account is Logedin";
}


$sql = "INSERT INTO account (Email, AccountName, Password) VALUES ('$_POST[Email]', '$_POST[AccountName]', '$_POST[Password]')" ;
echo $sql;
if (!mysqli_query($link, $sql)){
    echo "inserting into database failed";/// add something to show that there was a problem
}else{
echo "<script>alert('Welcome to your account');history.go(-2)</script>";
}

?>