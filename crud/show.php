<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('location:login.php');
    }
    require 'connection.php';

    // $sql = "SELECT * FROM `post` WHERE user_id = $_SESSION['id']";
    $sql = "SELECT simple.*,login.name AS log_name FROM simple INNER JOIN login ON simple.created_by = login.id";

    $result = $con->query($sql); 

    $user_id = $_SESSION['id'];

    $user = "SELECT * FROM `login` WHERE id = '$user_id'";

    $user_data = $con->query($user);

    if($user_data->num_rows > 0){
        while ($data = $user_data->fetch_object()) {
            $us_id = $data->id;
            $user_name = $data->name;
            $user_email = $data->email;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data show page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3"><a class="btn btn-danger btn-sm mr-2" onclick="javascript:return confirm('Leave This Page?')" href="logout.php">Logout </a>simple crud <a class="btn btn-primary btn-sm" href="index.php">Insert</a> <span><?php echo $user_name; ?></span></h2>
                <?php
                    if(isset($_GET['valid']) && $_GET['valid'] == 'error'){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                All Field Are Required!
                            </div>
                        <?php
                    }
                
                ?>

                <?php
                    if(isset($_GET['del']) && $_GET['del'] == 'success'){
                        ?>
                            <div class="alert alert-success" role="alert">
                                SuccessFully Data Deleted!
                            </div>
                        <?php
                    }
                
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Author</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            if($result->num_rows > 0){
                                $si = 1;
                                while ($row = $result->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $si; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->log_name; ?></td>
                                            <td><?php echo date('M-d-Y h:i A',strtotime($row->created_at)); ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row->id;?>" class="btn btn-primary btn-sm">Update</a>

                                                <a href="details.php?id=<?php echo $row->id;?>" class="btn btn-success btn-sm">View</a>

                                                <a onclick="javascript:return confirm('Are You Sure?')" href="delete.php?id=<?php echo $row->id;?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    $si++;
                                }
                            }
                        
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>