<?php
$con =mysqli_connect("localhost","root","","elgon");
if(!$con){
    die("Connection Error");
}
if(isset($_GET['Del'])){
    $userID =$_GET['Del'];
    $query =" Delete from farmer where User_ID='".$userID."';";
    $result =mysqli_query($con,$query);

    if($result){
        header("location:admin.php");
    }else{
        echo "Check your Query";
    }

}else{
    header("location:admin.php");
}


?>