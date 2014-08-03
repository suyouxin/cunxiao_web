<?php
$file_path='http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/admin/index.php/query/news';
$content=file_get_contents($file_path);
echo $content;
?>
