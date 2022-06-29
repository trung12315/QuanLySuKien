<?php
    $link = mysqli_connect("localhost", "root", "", "doan-3");
    if ($link === false) {
        die("ERROR: Không thể kết nối. " . mysqli_connect_error());
    }
?>