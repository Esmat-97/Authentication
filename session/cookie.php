<?php
if(isset($_POST['submit'])){

$title=$_POST['title'];
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
 
 

 
 


 $final = mysqli_query($con," SELECT * FROM users WHERE title='$title' AND  password='$pass' ");

 if (!$final) {
    echo "fail coonection";
}
else{
    echo "connected "."<br>";
}



if(mysqli_num_rows($final) > 0){

    $iti=mysqli_fetch_array($final);
 
    
    setcookie("usertitle",$iti['title'],time() + 60*60);
    
    header("location: home.php");
     }else{
        echo "fail coonection";
    }


}




?>