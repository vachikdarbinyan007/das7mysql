<?php
$connection=mysqli_connect("localhost","root","","pizza");
$pizza=$_POST["pizzaname"];
$price=$_POST["price"];
header("Location:account.php?st=saved");
$id=$_POST["save_id"];
$sql="UPDATE pizzas SET pizza='$pizza',price='$price' WHERE id=$id";
$ard=mysqli_query($connection,$sql);
if($ard){
    echo "everything saved!";
}else{
    die( "everything not saved!".
    mysqli_connect_error());
}
die;
?>