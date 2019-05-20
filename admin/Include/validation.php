<?php
session_start();

if (!isset($_SESSION['FullName'])) {
	header("Location: login.php?Login=Error");
	exit();
}
?>