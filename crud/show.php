<?php
    require 'connection.php';

    $sql = "SELECT * FROM `simple`";

    $result = $con->query($sql);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page | Simple crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a class="btn btn-primary btn-sm" href="index.php">Insert</a></h2>
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
                            <th>Phone</th>
                            <th>District</th>
                            <th>Gender</th>
                            <th>Hobby</th>
                            <th>Message</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            if($result->num_rows > 0){
                                while ($row = $result->fetch_object()) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row->id; ?></td>
                                            <td><?php echo $row->name; ?></td>
                                            <td><?php echo $row->email; ?></td>
                                            <td><?php echo $row->phone; ?></td>
                                            <td><?php echo $row->district; ?></td>
                                            <td><?php echo $row->gender; ?></td>
                                            <td><?php echo $row->hobby; ?></td>
                                            <td><?php echo $row->message; ?></td>
                                            <td><?php echo date('M-d-Y h:i A',strtotime($row->created_at)); ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $row->id;?>" class="btn btn-primary btn-sm mb-2">Update</a>

                                                <a onclick="javascript:return confirm('Are You Sure?')" href="delete.php?id=<?php echo $row->id;?>" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
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