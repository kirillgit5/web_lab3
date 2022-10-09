<?php
session_start();

$data = array(
    "username" => $_POST['username'],
    "age" => $_POST['age'],
    "salary" => $_POST['salary']
);

$_SESSION['data'] = $data;
?>

<a href="/forms/2cTest.php">Go</a>
<form method="post">
    <textarea name="username" cols="100" rows="1"></textarea>
    <textarea name="age" cols="100" rows="1"></textarea>
    <textarea name="salary" cols="100" rows="1"></textarea>
    <br>
    <input type="submit" value="Submit"/>
</form>