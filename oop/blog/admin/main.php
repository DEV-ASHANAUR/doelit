<?php

class Main{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $db = 'blog';

    protected $con;
    protected $sql;
    protected $result;

    // create connection
    public function __construct(){
        $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
        //check connection
        if($this->con->connect_error){
            echo "connected error {$this->con->connect_error}";
            die();
        }
    }
    //profile retrive
    public function profile_retrive($id){
        $this->sql = "SELECT * FROM `user` WHERE user_id  = '$id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    // update  profile
    public function update_profile($id,$oldphoto,$name,$email,$about){
        $this->sql = "UPDATE `user` SET `user_name`='$name',`user_email`='$email',`user_about`='$about',`user_photo`='$oldphoto' WHERE user_id = '$id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
        }else{
            return false;
        }
    }
    //insert data
    public function reg($name,$email,$password){
        $this->sql = "INSERT INTO `user`(`user_name`,`user_email`, `user_password`) VALUES ('$name','$email','$password')";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
        }else{
            return false;
        }
    }
    //check email
    public function checkEmail($email){
        $this->sql = "SELECT * FROM `user` WHERE user_email  = '$email'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    
    //close connection
    public function __destruct(){
        $this->con->close();
    }

}

// $obj = new Main();
// $obj->insert('jhon','jhon@gmail.com','0152484456','faridpur','male','cricket,football','lorem ipsum dami text');


















?>