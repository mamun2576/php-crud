<?php
include "db_connection.php";



$id=$_GET["id"];

$q="select * from students where id=$id";

$result=mysqli_query($conn,$q);

while($row=mysqli_fetch_array($result)){

echo "name:".$row['firstname']."</br>";
echo "email:".$row['email']."</br>";
echo "course:".$row['course']."</br>";
echo "city:".$row['city']."</br>";
}

?>