<?php
session_start();
session_destroy();

// if (isset ($_SESSION['basic_is_logged_in'])) {
// 	unset($_SESSION['basic_is_logged_in']);
// }

header('Location: login1.php')
?>