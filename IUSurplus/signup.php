  
<html> 

<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: lightcoral;  
}  
.container {  
    padding: 50px;  
  background-color: aliceblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>  
 
  <div class="container">  
    <p><img src="images/logo.png" alt="IU logo" style="float:right;width:70px;height:100px;">
      <form method="post" action="thankyou.php">
  <center>  <h1> User Registeration Form</h1> 
  </center> 

  <hr>  
  <label>Username :</label>   
<input type="text" name="username" placeholder= "username" size="15" required />   
 


<label>Phone :</label>
   
<input type="text" name="phone" placeholder="phone" size="10"/ required>   

 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="email" required>  
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="psw" required>  
  
    <label for="psw-repeat"><b>Re-type Password</b></label>  
    <input type="password" placeholder="Retype Password" name="psw-repeat" required>  
    <button type="submit" class="registerbtn">Sign Up</button>    
</form>  
</body> 

</html> 


