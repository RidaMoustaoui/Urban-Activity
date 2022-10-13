<?php
    if(!isset($_SESSION['Mail']))
    {
      session_start();
    }
    echo $_POST['getAct'];
    echo $_SESSION['UserID'];
?>