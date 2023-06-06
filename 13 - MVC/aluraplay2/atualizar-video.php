<?php 

require_once "./conn.php";


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

$titulo = filter_input(INPUT_POST, 'titulo');

if($url === false){
    header("Location: /index.php?sucesso=0");
}

if($titulo === false){
    header("Location: /index.php?sucesso=0");
}

if($id === false){
    header("Location: /index.php?sucesso=0");
}


//comecei a mensagem dizendo que estamos em guerra, mas eu queria te falar aqui hoje. Essa guerra já tá vencida, pois o cordeiro venceu!
//O reino de Deus não pode ter a minha cara ou a sua, no Reino de Deus a GLória é 100% de Cristo


$statment = $conn -> prepare("UPDATE videos SET url=?, title=? WHERE id=?;");

$statment ->bindValue(1, $url);
$statment ->bindValue(2, $titulo);
$statment ->bindValue(3, $id, PDO::PARAM_INT);

if($statment -> execute() === false){
    header("Location: /index.php?sucesso=0");
}else{
    
    header("Location: /index.php?sucesso=1");
}








