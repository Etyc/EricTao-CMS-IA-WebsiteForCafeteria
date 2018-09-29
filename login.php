<?php
 
$link = mysqli_connect("localhost","user","","test");

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
echo "<script>alert('Welcome to your account');history.go(-2)</script>";


?>
