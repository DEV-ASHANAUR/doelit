<?php
    include 'main.php';
    $obj = new Main();

    // if(isset($_POST['submit'])){
    //     $name = '$_POST['name']';
    //     $email = $_POST['email'];

    //     $obj->insert($name,$email);

    // }

    $name = "kamal";
    $email = "kamal@gmail.com";

    $obj->insert($name,$email);

   $del =  $obj->delete();

   if($del == true){
        echo 'delete succes';
   }else{
       echo 'error';
   }



    




?>