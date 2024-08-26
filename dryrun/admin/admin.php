<?php
    session_start();
    require_once "../config/dbcon.php";
    include "../plugin.php";
?>

<?php
if(isset($_SESSION['status']) == TRUE){
    include 'adminNav.php';
    include 'adminModal.php';
?>
    <div class = "container">
        <div class = "centered-box">
            <h1 class = "interactive-heading">Welcome Admin</h1>
            <p class = "interactive-paragraph">sample page</p>
    </div>
</div>
<?php
}else{
    $_SESSION['error'] = "You must login first";
    Header("Location: ../index.php");
}
?>

<style>
    
    body{
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }

    .container{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

