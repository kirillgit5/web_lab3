<html>
<head>
    //css
    <style>
        table
        {
            border-style:solid;
            border-width:2px;
            border-color:pink;
        }
    </style>
</head>
<body bgcolor="#EEFDEF">
echo "<table border='1'>
    <tr>
        <th>title</th>
        <th>description</th>
        <th>category</th>
    </tr>";
<?php
$files = [];
$path = getcwd();
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path . '/' . 'categories'));
foreach ($iterator as $file) {
    if ($file->isDir()) {
        continue;
    }

    $files[$file->getFilename()] = $file->getPathname();
}
$result = [];
foreach ($files  as $key => $value) {
    $title  = $key;
    $description = file_get_contents($value);
    $splitPath = explode('/', $value);
    $category = $splitPath[count($splitPath) - 2];
    echo "<tr>";
    echo "<td>" . $title . "</td>";
    echo "<td>" . $description . "</td>";
    echo "<td>" . $category . "</td>";
    echo "</tr>";
}
?>
</body>
</html>
