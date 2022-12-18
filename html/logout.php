<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['login']);
unset($_SESSION['nama']);

session_destroy();
echo "
<script> 
    localation.replace('index.php');
</script>";
