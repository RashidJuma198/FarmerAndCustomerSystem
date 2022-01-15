    <?php
    include_once 'connect.php';


    $sql="SELECT *FROM farmer ;";

    $results=mysqli_query($conn,$sql);


    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer</title>
    <link rel="stylesheet"  href="farmer.css" >
</head>
<body>
<div class="logintitle" style=" background-color:green">
        <h2><b>MT. ELGON FARM PRODUCE <br>MANAGEMENT SYSTEM<br>Buyers Site</b></h2>
    </div><br><br>
    <button style="margin-left: 1380px;height: 40px;width: 100px;border-radius: 10px;">
    <a href="farmerlogin.php">LOG OUT</a></button><br><br>
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
   
     <Fieldset>
            <LEgend>Products Details</LEgend>
            <label for="productname">Product_Name:</label>
            <input type="text" name="productname" id="productname" readonly value="<?php echo $name ?>">

          <label for="quantity">Product_Quantity:</label>
            <input type="text" name="quantity" id="quantity" readonly value="<?php echo $quantity ?>"><br><br><br>

            <label for="quality">Product_Quality:</label>
            <input type="text" name="quality" id="quality" readonly value="<?php echo $quality ?>">


            <label for="harvest">Product_Harvest_Date:</label>
            <input type="date" name="harvest" id="harvest" readonly value="<?php echo $harvest?>"><br><br><br>

            
            <label for="expiry">Product_Expiry_Date:</label>
            <input type="date" name="expiry" id="expiry" readonly value="<?php echo $expiry?>">

            <label for="location">Product_Location:</label>
            <input type="text" name="location" id="location" readonly value="<?php echo $location?>"><br><br><br>

            <label for="farmername">Farmer_Name:</label>
            <input type="text" name="farmername" id="farmername" readonly value="<?php echo $farmername?>"><br><br><br>

           <!-- <label for="farmerid">Farmer_ID:</label>
            <input type="text" name="farmerid" id="farmerid" value="<?php echo $farmid?>">-->

            <label for="phone">Farmer_Phone_No:</label>
            <input type="text" name="phone" id="phone" readonly value="<?php echo $phone?>">

            <label for="price">Price per:</label>
            <select name="price" id="price" readonly style=" height:30px ;background-color:rgb(202, 245, 116) ;font-size:20px">
                <option readonly value="Grams">Grams</option>
                <option  readonly value="Kilogram">Kilogram</option>
                <option readonly value="Sack">Sack</option>
                <option  readonly value="Tonne">Tonne</option>
                <input type="number" name="price" id="price" readonly value="<?php echo $price?>">
            </select>

            
        </Fieldset><br><br>
        <?php
    }
?>
      
   
</body>
</html>

