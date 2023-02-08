<?php include __DIR__ .'/includes/functions.php';?>
<?php 
session_start();
 $length=$_SESSION['password:_length'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            
            <div class="alert alert-primary" role="alert"><?php echo createPassword($length,$password)?>
                        </div>
        </div>
    </div>
</body>
</html>