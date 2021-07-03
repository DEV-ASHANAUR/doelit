<?php

    // function test(){
    //     echo "hello";
    // }

    // test();
    // $name = 'jhon';

    // class Main{

    //     // propertise
    //     public $name = 'jhon'; 
    //     // method
    //     public function test(){
    //         echo 'hello';
    //     }

    // }

    // $obj = new Main();  

    // // echo $obj->name;

    // $obj->test();

    // pass arg

    // class Main{

    //     // propertise
    //     public $name; 
    //     // method
    //     public function set_name($name){
    //         $this->name = $name;
    //     }

    //     public function get_name($gret){
    //         echo $gret.' '.$this->name;
    //     }

    // }

    // $obj = new Main(); // create obj 
    // $obj->set_name('sujon'); // method call
    // // echo $obj->name;
    // $obj->get_name('wellcome');

    class Main{

        public function __construct(){
            echo 'db connected <br>';
        }

        public function insert($name,$email){
            echo $name.'<br>';
            echo $email.'<br>';


            
        }

        public function update(){
            echo 'update <br>';
        }

        

        public function delete(){
            return false;
        }

        // public function __destruct(){
        //     echo 'dis connected';
        // }

    }

    // $obj = new Main();

    // // $obj->test();

    // // $obj->test1();

    // // $obj->test3();








?>