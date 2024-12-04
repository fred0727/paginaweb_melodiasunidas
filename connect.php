<?php
include('config/db.php');


$email = $_POST['email'];

$session = $database->verifyUser('freddymh07952023@gmail.com','Fr3ddyMh0727$$');

if ($session) {
    header('Location:blog.php');
}else{
    echo "Error";
}
?>