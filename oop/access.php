<?php
    class fruit{
        protected $name;
        protected $color;
        // public function __construct($name,$color){
        //     $this->name = $name;
        //     $this->color = $color;
        // }
        public function intro(){
            echo "i am {$this->name} and my color is {$this->color}<br>";
        }

    }
    $obj = new fruit();
    $obj->intro();


    // class mango extends fruit{
    //     public function message(){
    //         echo 'Who i am? <br>';
    //     }
    // }

    // $obj = new mango('mango','yellow');
    // $obj->message();
    // $obj->intro();


?>