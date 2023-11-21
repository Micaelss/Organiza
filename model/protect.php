<?php 
if(!isset($_SESSION)){
    session_start();    
}
if(!isset($_SESSION['id'])){
    echo'<script type="text/javascript">window.alert("Você precisa fazer login!")</script>';
    print"<script>location.href='index.php';</script>";
    die();
}
?>