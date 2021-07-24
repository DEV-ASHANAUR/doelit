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
    public function insert($photo,$name,$email,$phone,$dist,$gender,$hobby,$message){
        $this->sql = "INSERT INTO `simple`(`photo`,`name`, `email`, `phone`, `district`, `gender`, `hobby`, `message`) VALUES ('$photo','$name','$email','$phone','$dist','$gender','$hobby','$message')";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
            // echo 'ok';
        }else{
            return false;
            // echo 'error';
        }
    }
    // update with photo
    // public function update_photo($id,$fileNewName,$name,$email,$phone,$district,$gender,$hobby,$message){
    //     $this->sql = "UPDATE `simple` SET `photo` = '$fileNewName',`name` = '$name',`email` = '$email',`phone` = '$phone',`district` = '$district',`gender` = '$gender', `hobby` = '$hobby', `message` = '$message' WHERE id = '$id'";
    //     $this->result = $this->con->query($this->sql);
    //     if($this->result == true){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }
    // update without photo
    public function update($id,$oldphoto,$name,$email,$phone,$district,$gender,$hobby,$message){
        $this->sql = "UPDATE `simple` SET `photo` = '$oldphoto',`name` = '$name',`email` = '$email',`phone` = '$phone',`district` = '$district',`gender` = '$gender', `hobby` = '$hobby', `message` = '$message' WHERE id = '$id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
        }else{
            return false;
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
    // show details
    public function details($id){
        $this->sql = "SELECT * FROM `simple` WHERE id = '$id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    // get by id 
    public function get_data($id){
        $this->sql = "SELECT * FROM `simple` WHERE id = '$id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    //delete data
    public function delete($id){
        $this->sql = "DELETE FROM `simple` WHERE id = '$id'";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
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