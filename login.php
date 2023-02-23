<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PIZZASHOP</title>
</head>
<style>
    body{
    background-color:#d9d9d9;
    font-family:tahoma;
    }
    #formdiv{
        width:30%;
        height:30rem;
        margin:auto;
        background-color:#fff;
    }
    form{
        width:100%;
        height:100%;
        display:flex;
        flex-direction:column;
        justify-content:space-around;
        align-items:center;
    }
</style>
<body>
<?php
$connection=mysqli_connect("localhost","root","","pizza");
if($_SERVER['REQUEST_METHOD']=="POST"){
    if(empty($_POST['anun']) or empty($_POST['password']))
    echo "<p style='text-align:center;color:red;'>Enter valid data</p>";
    else if(is_numeric($_POST['anun']))
        echo "<p style='text-align:center;color:red;'>Enter valid data</p>";

    $name=$_POST['anun'];
    $password=$_POST['password'];
    
    $query="SELECT * FROM users WHERE name='$name' and password='$password' limit 1";
    $ardyunq=mysqli_query($connection,$query);
    $qanak=mysqli_num_rows($ardyunq);
    if($qanak==1){
        while($togh=mysqli_fetch_assoc($ardyunq)){
            session_start();
            $_SESSION['pizza_id']=$togh['status'];
            header("Location:account.php");
            die;
        };
    }
};
?>
    <div id="formdiv">
        <h2 style="text-align:center;">Login to MYpizza</h2>
    <form action="" method="post">
        <input type="text" name="anun" placeholder="Name"/>
        <input type="password" name="password" id="password" placeholder="Password"/>
        <input type="submit" value="submit"/>
    </form>
    </div>
</body>
</html>