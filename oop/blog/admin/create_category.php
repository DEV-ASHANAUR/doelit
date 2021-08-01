<?php
    session_start();
    include 'main.php';
    include 'Flash_data.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:add_category.php');
    }else{
        $cat_icon = $_POST['cat_icon'];
        $cat_name = $_POST['cat_name']; 

        $status = $obj->create_catagory($cat_icon,$cat_name);
        if($status == true){
            Flass_data::success("Catagory Created SuccessFully");
            header('location:view_category.php');
        }else{
            Flass_data::error("Something Went Wrong!");
            header('location:add_category.php');
        }     
    }

?>