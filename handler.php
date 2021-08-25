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
echo "connected successfully";

     //Insert data
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql = "INSERT INTO form_tbl (name, email)
VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "data inserted";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
 
} 

?>
<script>
  alert("click to close")
  window.close();
</script>



