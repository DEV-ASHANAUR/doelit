<?php

class Main{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = '';
    protected $db = 'doel';

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
    //insert data
    public function insert($name,$email,$phone,$dist,$gender,$hobby,$message){
        $this->sql = "INSERT INTO `simple`(`name`, `email`, `phone`, `district`, `gender`, `hobby`, `message`) VALUES ('$name','$email','$phone','$dist','$gender','$hobby','$message')";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
            // echo 'ok';
        }else{
            return false;
            // echo 'error';
        }
    }
    // show data
    public function showData(){
        $this->sql = "SELECT * FROM `simple`";
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