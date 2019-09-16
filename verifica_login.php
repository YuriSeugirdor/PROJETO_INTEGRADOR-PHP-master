<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: pglogin.php');
	exit();
}
