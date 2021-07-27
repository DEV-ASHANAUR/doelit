<?php
    include 'main.php';
    include 'Flash_data.php';
    session_start();
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:edit_profile.php');
    }else{

        $id = $_SESSION['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $oldphoto = $_POST['oldfile'];
        $about = $_POST['about'];
        
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
                        $filedestination = "uploads/".$fileNewName;
                        if(move_uploaded_file($filetmp,$filedestination)){
                            
                            unlink('uploads/'.$oldphoto);
                            $status = $obj->update_profile($id,$fileNewName,$name,$email,$about);

                            if($status == true){
                                Flass_data::success("Profile updated SuccessFully");
                                header('location:edit_profile.php');
                            }else{
                                Flass_data::error("Some Went Worng.Please Try Again");
                                header('location:edit_profile.php');
                            }
                        }

                    }else{
                        Flass_data::error("photo Upload Error.Please Try Again");
                        hheader('location:edit_profile.php');
                    }
                }else{
                    Flass_data::error("Please Upload valid Photo");
                    header('location:edit_profile.php');
                }

            }else{
                $status = $obj->update_profile($id,$oldphoto,$name,$email,$about);

                if($status == true){
                    Flass_data::success("Profile updated SuccessFully");
                    header('location:edit_profile.php');
                }else{
                    Flass_data::error("Some Went Worng.Please Try Again");
                    header('location:edit_profile.php');
                }
            }
            
        }


?>