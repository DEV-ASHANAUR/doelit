<?php
    session_start();
    include 'main.php';
    include 'Flash_data.php';
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:add_post.php');
    }else{
        $author_id = $_SESSION['id'];
        $cat_id = $_POST['catagory_id'];
        $post_title = $_POST['title']; 
        // $post_image = $_POST['file']; 
        $post_body = $_POST['description']; 

        if(!empty($_FILES['file']['name'])){
            // print_r($_FILES['file']);
            $filename = $_FILES['file']['name'];
            $filetmp = $_FILES["file"]["tmp_name"];
            $fileext = explode(".",$filename);
            $fileAuctualExt = strtolower(end($fileext));
            $allowed = array('jpg','jpeg','png');

            if(in_array($fileAuctualExt,$allowed)){
                $fileerror = $_FILES["file"]["error"];
                if($fileerror == 0){
                    $fileNewName = uniqid('',true).'.'.$fileAuctualExt;
                    $filedestination = "uploads/post/".$fileNewName;
                    if(move_uploaded_file($filetmp,$filedestination)){

                        $status = $obj->post_create($author_id,$cat_id,$fileNewName,$post_title,$post_body);

                        if($status == true){
                            Flass_data::success("Post Published SuccessFully");
                            header('location:add_post.php');
                        }else{
                            Flass_data::error("Something Went Wrong!");
                            header('location:add_post.php');
                        }
                    }

                }else{
                    Flass_data::error("File Error!");
                    header('location:add_post.php');
                }
            }else{
                Flass_data::error("This Type of File Ext Not Allowed!");
                header('location:add_post.php');
            }

        }else{
            Flass_data::error("Please Select an Image!");
            header('location:add_post.php');
        }
        // img upload end    
    }

?>