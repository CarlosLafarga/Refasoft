<?php
session_start();
if (!isset($_SESSION)) {
    header("Location:../Vista/login.php");
} else {
    session_unset();
    session_destroy();
    header("Location:../Vista/login.php");
}
