



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="log1.css" type="text/css">
    <link rel = "stylesheet" type = "text/css" href = "style.css">  
</head>
<body style="background-color:rgb(40, 161, 151);">
   
      
   
    <div class="logintitle" style=" background-color:rgb(40, 161, 151);">
        <h2><b>MT. ELGON FARM PRODUCE <br>MANAGEMENT SYSTEM</b></h2>
    </div>
    <nav>
        <button style="margin-left: 600px;height: 40px;width: 100px;border-radius: 10px;"><a href="">ADMIN</a></button>
        <button style="height: 40px;width: 100px;border-radius: 10px;"><a href="farmerlogin.php">FARMER'S</a></button>
        <button style="height: 40px;width: 100px;border-radius: 10px;"><a href="buyerlogin.php">BUYER'S</a></button>
      
       
    </nav>
    <form name="f1" action="loginsubmit.php" onsubmit = "return validation()" method="POST" style=" background-color:rgb(40, 161, 151);">
        <fieldset class="loging" style=" background-color:rgb(40, 161, 151);">
           <legend><b>Farmers</b></legend>
            <b> UserName: </b> <br>
            <input type = "text" id ="user" name  = "user"  style="height: 40px;font-size: 25px;background-color:rgb(40, 161, 151);"/> <br>
            <b> Password: </b> <br>
            <input type = "password" id ="pass" name  = "pass" style="height: 40px;font-size: 25px; background-color:rgb(40, 161, 151);"/> <br><br>

       <button class="btn1" type="submit" id="btn" name="submit">Log In</button>
       <button class="btn1" type="submit" name="fgtpassword"><a href="">Forgot Password</a></button>
       <button class="btn1" type="submit" name="sign"><a href="">Sign Up</a></button>
    </fieldset>
    </form>
   <!-- <br><br>
    <h3 id="timer"></h3>
    <script>
        //counting the date we are counting down to
        var CountDownDate =new Date("1 Dec,2021 00:00:00").getTime();
        //update the count down every 1 second
        var x =setInterval(function(){
            //get today's date and time
            var now =new Date().getTime();
            //find the distance between now and the count down date 
            var distance =CountDownDate -now;
            //Time calculation for days ,hours ,minutes and seconds
            var days =math.floor(distance /(1000 * 60 * 60 *24));
            var hours =math.floor((distance % (1000*60 *60*24)) /(1000*60*60));
            var minutes =math.floor((distance % (1000 * 60 *60)) /(1000 *60));
            var seconds =math.floor((distance % (1000 *60))/1000);

            //output the result in an element with the id="timer"

            document.getElementById("timer").innerHTML=days +"d"+hours+"h"+
            minutes+"m"+seconds+"s";

            //if the count down is over ,write some text
            if(distance<0){
                clearInterval(X);
                document.getElementById("timer").innerHTML= "EXAMINATION REGISTRATION TIME HAS EXPIRED" ;
            }
        },1000)
    </script>-->
    <script>  
        function validation()  
        {  
            var id=document.f1.user.value;  
            var ps=document.f1.pass.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
    </script>  
       
</body>
</html>