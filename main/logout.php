<?php

session_start();

session_unset();

session_destroy();

//file index belum ada
header("Location: ../login.php");
?>