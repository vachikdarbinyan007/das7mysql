<?php
if(isset($_GET["st"]) && $_GET["st"]=="saved"){
    print_r($_GET["st"]);
};
$connection=mysqli_connect("localhost","root","","pizza");

if($_SERVER['REQUEST_METHOD']=="GET"){
    $maxprice="";
    $sql_maxprice="SELECT MAX(Price)  AS LargestPrice FROM pizzas;";
    $ardyunq=mysqli_query($connection,$sql_maxprice);
    while($togh=mysqli_fetch_assoc($ardyunq)){
       $maxprice=$togh['LargestPrice'];
    };
    $from=0;
    $to=$maxprice;
}else{
    $maxprice=$_POST["to"];
    $from=0;
    $to=$maxprice;


};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family:tahoma;
            background-color:#d9d9d9;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if($_SESSION['pizza_id']==0){
        echo "<h1 style='text-align:center;'>Hello client!</h1>";
        include "select.php";
    }else if($_SESSION['pizza_id']==1){
        echo "<h1 style='text-align:center;'>Hello admin!</h1>";
        include "select.php";
    };
    ?>
    <div style="display:grid;grid-template-columns: auto auto auto;">
      <?php
      $sql="SELECT * FROM pizzas WHERE price BETWEEN $from and $to";
      $result=mysqli_query($connection,$sql);
      if($_SESSION['pizza_id']==0){
        while($togh=mysqli_fetch_assoc($result)){
            include "pizzatemplate.php";  
        };
      }else if($_SESSION['pizza_id']==1){
        while($togh=mysqli_fetch_assoc($result)){
            include "edittemplate.php";  
        };
      };
      ?>
    </div>


    <script>
        let price=0;
        function f(d){
            price=price*1 + d.value*1;
           alert(price) 
        }
    </script>
</body>
</html>