<?php

include "/posts/Parsedown.php";

$Parsedown = new Parsedown();

$fi = new FilesystemIterator(__DIR__, FilesystemIterator::SKIP_DOTS);

for ($x = 1; $x <= (iterator_count($fi)); $x++)  {
    $cPost = file_get_contents("/posts/post00$x.md", FILE_USE_INCLUDE_PATH);
    echo $Parsedown->text($cPost);
}

?>