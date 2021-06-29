
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base_direction";


    // Create connection
     $conn= mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




{
  if(isset($_POST['Right'])){
  

$my1_query = "INSERT INTO direction  (dr_Right) VALUES ('R') ";
if (mysqli_query($conn, $my1_query  )){
  echo "Successful (R)";
}else{
 echo "Erorr";


}

}}

   
   
?>