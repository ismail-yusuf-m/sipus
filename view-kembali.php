<?php
session_start();
if (!isset($_SESSION['sesi'])) {
    header("Location: index.php");
}
