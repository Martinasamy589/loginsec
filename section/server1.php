<?php 
if(!isset($_SESSION)){
session_start();
}
$error=[];
$db= mysqli_connect('localhost','root','','sectionin');
if (isset($_POST["create"])){
    $us=mysqli_real_escape_string($db,$_POST["name"]);
    $em=mysqli_real_escape_string($db,$_POST["email" ]);
    $ps=mysqli_real_escape_string($db,$_POST["password"]);
    $pss=mysqli_real_escape_string($db,$_POST["password_con"]);

if(empty( $us)){
    array_push($error,'us is empty');
}
if(empty( $em)){
    array_push($error,'em is empty');
}
if(empty( $ps)){
    array_push($error,'ps is empty');
}
if(empty( $pss)){
    array_push($error,'pss is empty');
}
if($ps!=$pss){

    array_push($error,'must');
}
if(count($error)==0){


    $sql="INSERT INTO user (namee, mail ,pass) Values(?,?,?)";
    $stmt = mysqli_prepare($db, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $us, $em, $ps);
    mysqli_stmt_execute($stmt);
}
}





?>
