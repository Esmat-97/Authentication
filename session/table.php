<?php
if(isset($_POST['submit'])){

$title=$_POST['title'];
$last=$_POST['lname'];
$mail=$_POST['email'];
$add=$_POST['address'];
$pass=$_POST['pass'];



 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "cookie";
 $con = mysqli_connect($host, $username, $password, $dbname);
 
 if (!$con) {
     echo "fail coonection";
 }
 else{
     echo "connected to data successfully"."<br>";
 }
 



   /*    create table  */ 

 

 
          



 $final = mysqli_query($con," INSERT INTO  users ( title,lname,email,`address`, `password` ) values ('$title','$last','$mail','$add','$pass') ");

 if (!$final) {
    echo "fail coonection";
}
else{
    echo "connected "."<br>";
}



                                                 


}




?>