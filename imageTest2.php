<?php

$file = 'doggo2.jpg'

header('Content-Type: image/jpeg');
header('Content-Length: ' . filesize($file));
echo file_get_contents($file);

?>