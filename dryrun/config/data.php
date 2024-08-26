<?php
session_start();
require_once "dbcon.php";
$email = $_POST['email'];
$password = $_POST['password']; 

$sql = "SELECT * FROM account WHERE email = '$email' && password = '$password'"; 
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){ 
        if(strpos($email, "@admin") == TRUE){
            $_SESSION['status'] = TRUE; 
            header("Location: ../admin/admin.php"); 
        }
    }
}else{
    $_SESSION['error'] = "INVALID EMAIL OR PASSWORD"; 
    header("Location: ../index.php"); 
}
?>
