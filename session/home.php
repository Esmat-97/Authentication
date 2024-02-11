<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



    <?php

$user_tit=$_COOKIE['usertitle'];

echo $user_tit;



                /*                    */
                


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


                        /*                */


                        
// echo " SELECT * FROM users WHERE title='$user_tit' ";
// die();


$final = mysqli_query($con," SELECT * FROM users WHERE title='$user_tit' ");

if (!$final) {
   echo "fail coonection";
}
else{
   echo "connected "."<br>";
}



                         /*                */


   $finish=mysqli_fetch_array($final);
     $give=$finish['title'];
  

    ?>


<h1> <?php echo "welcome". $give."<br>" ?></h1>
    <h1>home</h1>
    <h1>home</h1>
   
    <a href="logout.php">logout</a>
</body>
</html>