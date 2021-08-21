 <?php 
 $email =$_POST["email"]; 
 $name =$_POST["name"];


 echo "<h1>Hello:$name</h1>";
 if(filter_var($email, FILTER_VALIDATE_EMAIL)){
 ECHO("<h1>$email is a valid email address</h1>");
 }else{
     echo("<h1>$email is not a valid email address</h1>");
 }
 ?>