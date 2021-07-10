<?php
    // class abc{
    //     public static $name = 'rakib';

    //     public static function test(){
    //        return self::$name;
    //     }

    //     public function dis(){
    //         return self::test();
    //     }
    // }

    // // $obj = new abc();
    // // $obj->test();

    // // echo abc::test();
    // $obj = new abc();
    // echo $obj->dis();
    // // echo abc::$name;

    class xyz{
        public static $name = 'kamal';

    }

    class abc extends xyz{
        public static $name = 'rahul';
        public function dis(){
            return self::$name;
            return parent::$name;
        }
    }

    $obj = new abc();
    echo $obj->dis();


?>