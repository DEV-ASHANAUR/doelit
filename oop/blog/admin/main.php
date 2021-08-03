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
    //change_pass
    public function change_pass($pass,$id){
        $this->sql = "UPDATE `user` SET `user_password`='$pass' WHERE user_id = '$id'";
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
    // ------------------------------category section-------------------------------
    public function create_catagory($cat_icon,$cat_name){
        $this->sql = "INSERT INTO `catagory`(`cat_name`, `cat_icon`) VALUES ('$cat_name','$cat_icon')";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
        }else{
            return false;
        }
    }
    //get data
    public function get_cat(){
        $this->sql = "SELECT * FROM `catagory`";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    // ------------------------------post section--------------------
    // post_create
    public function post_create($author_id,$cat_id,$fileNewName,$post_title,$post_body){
        $this->sql = "INSERT INTO `post`(`author_id`, `catagory_id`, `post_title`, `post_body`, `post_thumbnail`) VALUES ('$author_id','$cat_id','$post_title','$post_body','$fileNewName')";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return true;
        }else{
            return false;
        }
    }
    //get post
    public function get_post($id){
        $this->sql = "SELECT * FROM `post` WHERE author_id = '$id' ORDER BY post_id DESC";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    //get all post
    public function get_all_post($start_from,$num_per_page){
        $this->sql = "SELECT post.*,catagory.cat_name,user.user_name,user.user_photo FROM post
        JOIN catagory ON post.catagory_id = catagory.cat_id
        JOIN user ON post.author_id = user.user_id limit $start_from,$num_per_page";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result;
        }else{
            return false;
        }
    }
    //total_data
    public function total_data(){
        $this->sql = "SELECT * FROM post";
        $this->result = $this->con->query($this->sql);
        if($this->result == true){
            return $this->result->num_rows;
        }else{
            return false;
        }
    }
    //get_single_post
    public function get_single_post($post_id){
        $this->sql = "SELECT post.*,catagory.cat_name,user.user_name,user.user_photo,user.user_about FROM post JOIN catagory ON post.catagory_id = catagory.cat_id JOIN user ON post.author_id = user.user_id";
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