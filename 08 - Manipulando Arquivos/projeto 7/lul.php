<?php


$novoCurso = trim(fgets(STDIN));

file_put_contents('cursos.txt', "\n$novoCurso", FILE_APPEND);



