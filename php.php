<?php
$title = 'Server Indexer PHP';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
</head>
<body>
<?php

function indexer() {
    $dir_list = glob('*/', GLOB_ONLYDIR);

    $indexed = false;

    foreach ($dir_list as $item) {
        if (file_exists($item . 'index.html')) {
            echo "Indexer found an <b>index.html</b> in: <a href=\"{$item}index.html\">{$item}</a> <br>";
            $indexed = true;
        } 
    }

    if (!$indexed) {
        echo "Indexer wasn't able to index any file.";
    }
}

indexer();
//  By 0utl4nder https://github.com/0utl4nder 

?>
</body>
</html>
