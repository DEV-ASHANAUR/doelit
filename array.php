<!-- index array -->

<?php
    // $arr1 = array(); // 
    // $arr = []; //

    // $arr = [];
    // $arr[1] = 45; // insert data 

    // array_push($arr,34,78,343); // insert data last

    // array_pop($arr); // delete from last

    // array_shift($arr); // delete from first

    // array_unshift($arr,78); // insert from first

    // $newArr = ['html','css','javascript','php','java'];

    // echo '<pre>';
    //     print_r($newArr);
    // echo '<pre>';

    // $x = array_splice($newArr,2);

    // echo '<pre>';
    //     print_r($x);
    // echo '<pre>';

    // $arr1 = [78,'dfd'];

    // $arr2 = [78,'fdf'];

    // print_r(array_merge($arr1,$arr2));

    // $arr = [1,2,3,4,5,6];

    // echo $arr[0]; 

    // $arr[0] = 45;
    // $arr[1] = 50;
    // // sort($arr); // assending
    // // rsort($arr); // decending
    // // print_r($arr);
    // echo '<pre>';
    //     print_r($arr);
    // echo '<pre>';

    // echo count($arr); // array length

    // $arr = [1,2,3,4,5,6];

    // echo $arr[3];

    // for($i = 0; $i < count($arr); $i++){
    //     // $sum = $sum + $arr[$i];

    //     echo $arr[$i]."<br>";
    // }

    // $sum = 0;

    // for($i = 0; $i < count($arr); $i++){
    //     $sum += $arr[$i];
    //     // $sum = $sum + $i;
    // }

    // echo $sum;
    // value print by foreach
    // foreach($arr as $key => $val){
    //     echo $key .' : '. $val.'<br>';
    // }

    // sum by foreach
    // $sum = 0;
    // foreach($arr as $val){
    //     $sum += $val;
    // }

    // echo $sum;

    // value print by for loop

    // for($i = 0; $i < count($arr); $i++){
    //     echo $arr[$i].'<br>';
    // }

    // Associative Arrays

    // $arr = ["jhon" => 78,"karim" => 55,"Rahim" => 65,"address" => "dhaka"];

    // $arr["rasel"] = 25;

    // asort($arr); // assending value
    // ksort($arr); //decending
    // arsort($arr);

    // echo '<pre>';
    // print_r($arr);
    // echo '<pre>';

    // foreach($arr as $key => $val){
    //     echo $key. ' Age is = '. $val.'<br>';
    // }

    // Multidimensional array


    $arr = [
        ['rahim','karim','rasel'],
        [1,2,3,4,5,6],
        ['volvo']
    ];

    // $arr[]
    // echo '<pre>';
    // print_r($arr[][]);
    // echo '<pre>';

    for($i = 0; $i < count($arr); $i++){
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j].'<br>';
        }
        // echo '<pre>';
        // print_r($arr[$i]).'<br>';
        // echo '<pre>';

    }



?>    