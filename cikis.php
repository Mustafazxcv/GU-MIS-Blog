<?php
session_start();
session_unset();
session_destroy();
header("Location: index.php"); // Çıkış yaptıktan sonra yönlendirilecek sayfa
exit;
?>
