<?php
    $name = $email = ''; // set empty variable
    if(isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST"){

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test_input($_POST['name']);

        $email = test_input($_POST['email']);

    
        if($name != '' && $email != ''){
            echo 'My Name is '.$name. ' And Email is '.$email;
        }else{
            echo 'Please Enter Vaild Information';
        }

        

        

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>

</head>
<body>
    <h1>Simple Form</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="">Enter Name</label>
        <input type="text" name="name" placeholder="Enter Name" required><br><br>

        <label for="">Enter Email</label>
        <input type="email" name="email" placeholder="Enter Email" required><br><br>

        <input type="submit" name="submit" value="Sumbit">
        <input type="reset">
    </form>
</body>
</html>