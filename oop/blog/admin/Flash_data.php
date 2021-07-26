<?php
    class Flass_data
    {
        public static function show_error(){
            if(!isset($_SESSION['msg'])){
                return null;
            }
            $msg = $_SESSION['msg'];
            unset($_SESSION['msg']);
            return implode("<br>", $msg);
        }
        public static function success($msg){
            if(!isset($_SESSION['msg'])){
                $_SESSION['msg'] = array();
            }
            $_SESSION['msg']['success'] = $msg;
        }
        public static function error($msg){
            if(!isset($_SESSION['msg'])){
                $_SESSION['msg'] = array();
            }
            $_SESSION['msg']['error'] = $msg;
        }
        
    }



?>