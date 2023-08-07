<?php
include 'connect.php';
if(isset($_POST['Zatwierdz'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $numer=$_POST['numer'];
    $haslo=$_POST['haslo'];
    $sql="insert into 'crud' (name,email,numer,haslo)
    values('$name','$email','$numer','$haslo')";
    $result = mysqli_query($con,$sql,$mysqli);
    
 
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"


    <title>Crud operation</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control" placeholder="Wpisz imie" name="name" autocomplete="off"> 
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="email" class="form-control" placeholder="Wpisz email" name="email" autocomplete="off">
            </div>
            <div class="form-group">
                <label>numer</label>
                <input type="text" class="form-control" placeholder="Wpisz numer" name="numer" autocomplete="off">
            </div>
            <div class="form-group">
                <label>haslo</label>
                <input type="text" class="form-control" placeholder="Wpisz haslo" name="haslo" autocomplete="off">
            </div>

            <button type="Zatwierdz" class="btn btn-primary" name='Zatwierdz'>Zatwierdz</button>
        </form>
    </div>


</body>

</html>