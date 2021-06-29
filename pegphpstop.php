

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





 
  

$my1_query = "INSERT INTO direction  (dr_stop) VALUES ('S') ";
if (mysqli_query($conn, $my1_query  )){
  echo "Successful (S)";
}else{
 echo "Erorr";


}



   
   
?>