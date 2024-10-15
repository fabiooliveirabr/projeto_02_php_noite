<?php
// logout.php
session_start();
session_destroy();
header("Location: login.php?erro2=sim");
?>