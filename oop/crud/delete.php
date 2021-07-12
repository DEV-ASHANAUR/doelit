<?php
    include 'main.php';
    include 'Flash_data.php';
    session_start();
    $obj = new Main();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = $obj->details($id);
        if($result->num_rows > 0){
            while($row = $result->fetch_object()){
                unlink('uploads/'.$row->photo);
                $status = $obj->delete($id);
                if($status == true){
                    Flass_data::success("Data Deleted SuccessFully");
                    header('location:show.php');
                }else{
                    Flass_data::error("Some Went Worng.Please Try Again");
                    header('location:show.php');
                }
            }
        }
    }




?>