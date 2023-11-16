<?php
setcookie('key','',time()-60);
session_start();
session_unset();
session_destroy();
header("Location:login.php");