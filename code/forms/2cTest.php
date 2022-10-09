<?php
session_start();

echo nl2br("\n" . $_SESSION['data']["username"]);
echo nl2br("\n" . $_SESSION['data']["age"]);
echo nl2br("\n" . $_SESSION['data']["salary"]);