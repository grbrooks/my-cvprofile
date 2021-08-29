<style>
  *{background-color: aqua;}
  <?php include "css/styles.css"?>
</style>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="mydbnew";

// Create connection
$conn=new mysqli($servername,$username,$password,$dbname);

if ($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
echo "connected successfully<br>";

     //Insert data
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql = "INSERT INTO form_tbl (name, email)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
 
echo"<h2><a href='index.html'>'inserted successfully'</a></h2>";
echo"<h2><a href='index.html'>'inserted successfully'</a></h2>";
echo"<h2><a href='index.html'>'inserted successfully'</a></h2>";
echo"<h2><a href='index.html'>'inserted successfully'</a></h2>";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;


} 

  ?>

  
  </html>
  



