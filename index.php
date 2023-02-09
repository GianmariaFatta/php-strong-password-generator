<?php 
include __DIR__ .'/includes/functions.php';

if(isset($_GET["password_length"])){
   $result= createPassword($_GET['password_length']);

  if($result)header('Location: success.php'); 
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- AUTHOR -->
    <meta name="author" content="S.Gianmaria Fatta" >
    <!-- NAME -->
    <title>PHP_Strong_Password</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container ">
        <div class="row  d-flex  justify-content-center align-items-center">
            <div class="col-12 text-center mt-5 p-5">
                <h1>STRONG PASSWORD</h1>
                <h2>genera la tua password sicura</h2>
            </div>
        
            <div class="col-6">
                <p>inserisci la lunghezza della tua password</p>
            </div>
            <div class="col-6"><form class="  w-100 d-flex flex-column align-items-left " action="#" method="get" >
            <input class=" " type="number" name="password_length" placeholder="lunghezza password" min=7 max=15 value="$length" >
            <button type="submit" class="btn btn-danger mt-2 w-25" > Invia</button>
   </form>
</div>
            
        </div>
    </div>
</body>
</html>

<style>
   
</style>