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
        <h2><b>MT. ELGON FARM PRODUCE <br>MANAGEMENT SYSTEM</b></h2>
    </div><br><br>
    <button style="margin-left: 1380px;height: 40px;width: 100px;border-radius: 10px;">
    <a href="farmerlogin.php">LOG OUT</a></button><br><br>
    
    <form action="submitfarmer.php" Method="POST">
        <Fieldset>
            <LEgend>Products Details</LEgend>
            <label for="productname">Product_Name:</label>
            <input type="text" name="productname" id="productname" required>

          <label for="quantity">Product_Quantity:</label>
            <input type="text" name="quantity" id="quantity" required><br><br><br>

            <label for="quality">Product_Quality:</label>
            <input type="text" name="quality" id="quality" required>


            <label for="harvest">Product_Harvest_Date:</label>
            <input type="date" name="harvest" id="harvest" required><br><br><br>

            
            <label for="expiry">Product_Expiry_Date:</label>
            <input type="date" name="expiry" id="expiry" required>

            <label for="location">Product_Location:</label>
            <input type="text" name="location" id="location" required><br><br><br>

            <label for="farmername">Farmer_Name:</label>
            <input type="text" name="farmername" id="farmername" required>

            <label for="farmerid">Farmer_ID:</label>
            <input type="text" name="farmerid" id="farmerid" required><br><br><br>

            <label for="phone">Farmer_Phone_No:</label>
            <input type="text" name="phone" id="phone" required>

            <label for="price">Price per:</label>
            <select name="price" id="price"  style=" height:30px ;background-color:rgb(202, 245, 116) ;font-size:20px">
                <option value="Grams">Grams</option>
                <option value="Kilogram">Kilogram</option>
                <option value="Sack">Sack</option>
                <option value="Tonne">Tonne</option>
                <input type="number" name="price" id="price" placeholder="Kshs..">
            </select>

            
        </Fieldset><br><br>
        <fieldset>
            <legend>Send To Buyer's</legend>
            <button type="submit" name="submit" style="margin-left: 400px;height: 40px;width: 100px;border-radius: 10px;">Send</button>
            <button type="reset" style="height: 40px;width: 100px;border-radius: 10px;">Reset</button>

        </fieldset>
    </form>
</body>
</html>