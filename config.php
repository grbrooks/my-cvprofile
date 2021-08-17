

PHP File

<?

$Name=($_POST['Name']);
$Email=($_POST['Email']);

$hostname="localhost";
$username="mycvblog_Graham";
$password="Bester3597";
$dbname="config";
$usertable="name";

$link=mysqli_connect($hostname,$username,$password,$dbname);


if($link===false){
    die("Error: Could not connect to database. ".mysqli_connect_error());
}


$sql="INSERT INTO $usertable(Name,Email) VALUES ('$Name', '$Email')";

if(mysqli_query($link,$sql)){
echo "Records added successfully.";

}else{
echo "ERROR: Could not able to execute $sql. ".mysqli_error($link);

}
mysqli_close($link);
?>