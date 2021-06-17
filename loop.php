<?php
    // nfor loop
    // $sum = 0;
    // for ($i=1; $i <= 10 ; $i++) { 
    //     // echo $i.' hello <br>';
    //     echo $sum .'='. $sum .'+'. $i .'<br>';
    //     $sum = $sum + $i;
    // }

    // echo $sum;

    // print 100 to 1;
    // for ($i=100; $i >= 1 ; $i--) { 
    //     echo $i .'<br>';
    // }
    // print 1 to 100 even number
    // for ($i=1; $i <= 100; $i++) { 
    //     if($i % 2 == 0){
    //         echo $i .'<br>';
    //     }
    // }

    // print 1 to 100 odd number
    // for ($i=1; $i <= 100; $i++) { 
    //     if($i % 2 == 1){
    //         echo $i .'<br>';
    //     }
    // }

    // while loop 

    // $a = 1;
    // while ($a <= 10) {
    //     echo $a. '<br>';
    //     $a++;
    // }

    $value = true;

    $num = 2;
    
    while($value){
        $random = rand(1,10);
        if($random == $num){
            echo "Winner Winner Chiken Dinner";
            break;
        }else{
            echo 'you Got '.$random. '<br>';
        }
    }








?>