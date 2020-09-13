<?php
session_start();
session_destroy();
echo "<script>";
echo "(window.location.assign('index.html')) </script>";
exit();

?>
