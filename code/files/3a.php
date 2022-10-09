
<?php
$filePath = 'categories/' . $_POST['category'] . '/' . $_POST['title'];
$fp = fopen($filePath, 'w+');
fwrite($fp, $_POST['description']);
fclose($fp);
?>

<a href="/files/3aTests.php">Go</a>
<form method="post">
    <textarea name="email" cols="100" rows="1"></textarea>
    <textarea name="title" cols="100" rows="1"></textarea>
    <textarea name="description" cols="100" rows="1"></textarea>
    <label>
        category
        <select name="category">
            <option value="phones">phones</option>
            <option value="computers">computers</option>
            <option value="other">misc</option>
        </select>
    </label>
    <br>
    <input type="submit" value="Submit"/>
</form>
