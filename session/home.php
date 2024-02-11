<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   



    <?php

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



$user_tit=$_COOKIE['usertitle'];

                        
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
 
 <div>
    
    <?php if($give == "mohamed"){

      echo " <h1>the admin page</h1>
      <button>delete</button>
      <button>add to cart</button> "; 
                     
  
$all_users = mysqli_query($con," SELECT * FROM users ");

                       ?>
       
       
       <?php
      while($row = mysqli_fetch_assoc($all_users)) { 
         
        ?>



 <div class="row row-cols-3 row-cols-md-3  row-cols-lg-4 g-4">
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <div class="card-text"> name :<?php echo $row["title"]; ?> </div>
      </div>
    </div>
  </div>
  </div>

        <?php
      }
    }
        ?>
                    

               
    
                    </div>
   
    <a href="logout.php">logout</a>
</body>
</html>