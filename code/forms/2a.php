<form method="post">
    <textarea name="text" cols="100" rows="1"></textarea>
    <br>
    <input type="submit" value="Submit"/>
</form>

<?php

$text = $_POST['text'];

echo nl2br("\n" . "Слов:" . preg_match_all('/\S+/', $text));

echo  nl2br("\n" . "Символов:" .mb_strlen($text, 'UTF-8'));
