<?php
    include 'main.php';
    include 'Flash_data.php';
    session_start();
    $obj = new Main();

    if(!isset($_POST['submit'])){
        header('location:show.php');
    }else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $district = $_POST['district'];
        $gender = $_POST['gender'];
        $oldphoto = $_POST['oldfile'];
        $hobby = ($_POST['hobby'])?implode(",", $_POST['hobby']):'';
        $message = $_POST['message'];
        
        if(trim($name) == '' || trim($email) == '' || trim($phone) == '' || trim($district) == '' || trim($gender) == '' || trim($hobby) == '' || trim($message) == ''){
            Flass_data::error("All Field Are Required");
            header('location:edit.php?id='.$id);
        }else{
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
                            $status = $obj->update($id,$fileNewName,$name,$email,$phone,$district,$gender,$hobby,$message);

                            if($status == true){
                                Flass_data::success("Data update SuccessFully");
                                header('location:edit.php?id='.$id);
                            }else{
                                Flass_data::error("Some Went Worng.Please Try Again");
                                header('location:edit.php?id='.$id);
                            }
                        }

                    }else{
                        Flass_data::error("photo Upload Error.Please Try Again");
                        header('location:edit.php?id='.$id);
                    }
                }else{
                    Flass_data::error("Please Upload valid Photo");
                    header('location:edit.php?id='.$id);
                }

            }else{
                $status = $obj->update($id,$oldphoto,$name,$email,$phone,$district,$gender,$hobby,$message);

                if($status == true){
                    Flass_data::success("Data update SuccessFully");
                    header('location:edit.php?id='.$id);
                }else{
                    Flass_data::error("Some Went Worng.Please Try Again");
                    header('location:edit.php?id='.$id);
                }
            }
            
        }

    }
?>