<?php
$server="localhost";//dbserver hostname
$username="root";//db username
$password="";//db password
$db="spices";//db name
$conn =mysqli_connect($server,$username,$password,$db);
if($conn)
{
    echo "connected";
}
else{
    echo "not connected";
}

if(isset ($_POST["submit"]))
{
$fn=$_POST["firstName"];
$ln=$_POST["lastName"];
$g=$_POST["gender"];
$e=$_POST["email"];
$p=MD5($_POST["password"]);
$n=$_POST["number"];
    $insert= "INSERT INTO `signup` (`firstname`,`lastname`,`gender`,`email`,`password`,`phoneno`) VALUES ('$fn','$ln','$g','$e','$p','$n')";
   $x = mysqli_query($conn,$insert);//connect 
    if($x)
    {
        echo "inserted";
    }
    else
    {
        echo "insert failure";
    }
}
?>