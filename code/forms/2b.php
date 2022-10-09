<?php
session_start();
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['sirname'] = $_POST['sirname'];
$_SESSION['age'] = $_POST['age'];
?>

<a href="/forms/2bTest.php">Go</a>
<form method="post">
    <textarea name="firstName" cols="100" rows="1"></textarea>
    <textarea name="sirname" cols="100" rows="1"></textarea>
    <textarea name="age" cols="100" rows="1"></textarea>
    <br>
    <input type="submit" value="Submit"/>
</form>