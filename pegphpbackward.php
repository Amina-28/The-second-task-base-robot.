
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname ="base_direction";


    // Create connection
     $conn= mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




{
  if(isset($_POST['backward'])){
  

$my1_query = "INSERT INTO  direction  (dr_backward) VALUES ('B') ";
if (mysqli_query($conn, $my1_query  )){
  echo "Successful (B)";
}else{
 echo "Erorr";


}

}}

   
   
?>