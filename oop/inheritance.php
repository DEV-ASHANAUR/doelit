<?php
    class fruit{
        public $name;
        public $color;
        public function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "i am {$this->name} and my color is {$this->color}";
        }

    }

    class mango extends fruit{
        public function message(){
            echo 'Who i am? <br>';
        }
    }

    $obj = new mango('mango','yellow');
    $obj->message();
    $obj->intro();


?>