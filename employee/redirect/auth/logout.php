<?php

session_destroy();

header("Location: ../redirect/login.php");
exit();
?>