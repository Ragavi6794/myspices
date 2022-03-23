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

if(isset ($_POST['send']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $comment=$_POST['comment'];
    $insert="INSERT INTO `message` (`name`,`email`,`comment`)VALUES ('$name','$email','$comment')";
    $x=mysqli_query($conn,$insert);//connect 
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