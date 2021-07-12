<?php
    include 'main.php';
    session_start();
    include "Flash_data.php";

    $obj = new Main();
    $result = $obj->showData();

?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data show page | Simple crud</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
</head>
<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h2 class="text-center text-capitalize mb-3">simple crud <a class="btn btn-primary btn-sm" href="index.php">Insert</a></h2>
                <?php
                if(isset($_SESSION['msg']['success'])){
                    ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong class="text-center d-block"><?php echo Flass_data::show_error();?></strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php 
                    }
                ?>
                <table id="datatable" class="table table-striped table-bordered" style="width:100%" >
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
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
    <!-- script here -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script> 
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        function daTaTable() {
            $('#datatable').DataTable();
        };
        daTaTable();
    </script>
</body>
</html>