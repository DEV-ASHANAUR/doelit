<?php
    trait message{
        public function test(){
            echo 'hello i am first trait<br>';
        }
    }

    trait messageTwo{
        public function test1(){
            echo 'hello i am 2nd trait';
        }
    }

    class welcome{
        use message,messageTwo;
    }

    $obj = new welcome();

    $obj->test();
    $obj->test1();





?>