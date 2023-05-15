<?php


$file = fopen('cursos.txt', 'r');


stream_filter_append($file, 'string.toupper');

echo fread($file, filesize('cursos.txt'));



