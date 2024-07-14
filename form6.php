<!doctype html>
<html>
    <head>
        <title>Login Form</title>
        <script src="form6script.js"></script>
    </head>
   <link rel="stylesheet" href="6.css">
    <body>
        <div class="form" id="form1">
       <form action="loginviasignin.php" method="post">
            <div class="signin" style="padding:30px">
<div class="a1">
            <a  style=" background-color: rgb(0, 108, 151);" onclick="movetosignin()" href="#signin">SIGN IN</a> <a onclick="movetosignup()" href="#signup">SIGN UP</a>
            
            
         
        </div>
    
        <div class="b1">
            <button style="border-radius: 2px; border:none; background-color: white;"  type="button"> <img src="image/facebook.png" width="30px" height="15px" title="Login with Fecebook" alt="Fecebook Icon"></button>
        
       
            <button style="border-radius: 2px;border:none; background-color:white;" type="button"> <img src="image/twitter.png" width="30px" height="15px" title="Login with Google" alt="Google Icon"></button>

        </div>

<label for="email">
        <input type="email" id="email" name="email" placeholder="E-mail"><br>
    </label>
        <br>
        <label for="password">
        <input type="password" id="password" name="password" placeholder="Password">
    </label>
<br>
<label for="button">
       <button style="width:90%;background-color: rgb(0, 132, 255);border-collapse:collapse ;border-radius: 4px; border-color: rgb(0, 132, 255);color: white;" > SIGN IN</button>
    </label>
    </div>
    </form>
    </div>
    <div class="form2" id="form2" style="display:none;background-color: rgb(32, 179, 179);padding: 10px;" >
   <form action="loginviasignup.php" method="post">
        <div class="signup" id="signup">
            <div class="a3">
            <a onclick="movetosignin()" href="#signin">SIGN IN </a><a  style=" background-color: rgb(0, 108, 151);" onclick="movetosignup()"  href="#signup">SIGN UP</a> 
           </div>
           <br>
            <label for="Username">
                <input type="text" name="Username" id="Username" placeholder="Username">
            </label>
            <br>
            <label for="email">
        <input type="email" id="mail" name="mail" placeholder="E-mail"><br>
    </label>
        <br>
        <label for="pass">
        <input type="password" id="pass" name="pass" placeholder="Password">
    </label>
        
<label for="button">
     <button style="background-color: rgb(0, 132, 255);
        border-color: rgb(0, 132, 255);
        border-radius: 4px;" > SIGN UP</button>
    </label>
    </div>


        </form>
        
</div>
    </body>
</html>