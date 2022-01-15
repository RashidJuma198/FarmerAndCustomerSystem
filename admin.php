<?php
    include_once 'connect.php';


    $sql="SELECT *FROM farmer ;";

    $results=mysqli_query($conn,$sql);


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td,tr{
            border:3px solid green;
            border-collapse:collapse;
        }
        th,td{
            text-align:center;
            padding:3px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer</title>
    <link rel="stylesheet"  href="farmer.css" >
</head>
<body>
<div class="logintitle" style=" background-color:green">
        <h2><b>MT. ELGON FARM PRODUCE <br>MANAGEMENT SYSTEM<br>ADMIN</b></h2>
    </div><br><br>
    <button style="margin-left: px;height: 40px;width: 150px;border-radius: 10px;">
    <a href="farmer.php">ADD_PRODUCTS</a></button>
    <button style="margin-left: px;height: 40px;width: 100px;border-radius: 10px;">
    <a href="farmerlogin.php">LOG OUT</a></button><br><br>


<table>
    <tr>
        <th>User_ID</th>
        <th>Products_Name</th>
        <th>Product_Quantity</th>
        <th>Product_Quantity</th>
        <th>Product_Harvest_Date</th>
        <th>Product_Expiry_Date</th>
        <th>Product_Location</th>
        <th>Farmer_Name</th>
        <th>Farmer_ID</th>
        <th>Farmer_Phone_No</th>
        <th>Price</th>
        <th>Delete</th>
        <th>Update</th>

    </tr>

    <?php  
    while($row=mysqli_fetch_assoc( $results)){
        $userid=$row['User_ID'];
        $name=$row['Product_Name'];
        $quantity=$row['Product_Quantity'];
        $quality=$row['Product_Quality'];
        $harvest=$row['Product_Harvest_Date'];
        $expiry=$row['Product_Expiry_Date'];
        $location=$row['Product_Location'];
        $farmername=$row['Farmer_Name'];
        $farmid=$row['Farmer_ID'];
        $phone=$row['Farmer_Phone_No'];
        $price=$row['Price'];
    
?>
<tr>
    <td><?php echo $userid?></td>
    <td><?php echo $name?></td>
    <td><?php echo $quantity?></td>
    <td><?php echo $quality?></td>
    <td><?php echo $harvest?></td>
    <td><?php echo $expiry?></td>
    <td><?php echo $location?></td>
    <td><?php echo $farmername?></td>
    <td><?php echo $farmid?></td>
    <td><?php echo $phone?></td>
    <td><?php echo $price?></td>

    <td><a href="">Update</td>
    <td><a href="delete.php?GetID=<<?php echo $userid?>">Delete</td>
</tr>
<?php
    }
?>
</table>
  
      
   
</body>
</html>

