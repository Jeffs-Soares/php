<?php

$host = "localhost";
$port = "5432";
$dbname = "alura";
$user = "postgres";
$password = "root";

try {
    $conn = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    die($e->getMessage());
}


$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$video = [
    'url' => '',
    'title' => ''
];




if($id !== false && $id !== null){

    $sql = "SELECT * FROM videos WHERE id=?;";
    
    $statement = $conn -> prepare($sql);
    
    $statement ->bindValue(1, $id, PDO::PARAM_INT);
    $statement -> execute();
    $video = $statement -> fetch(\PDO::FETCH_ASSOC);
}


// echo "<pre>";
// print_r($id);
// exit();

?>

<<?php  require_once __DIR__ . "/inicio-html.php"; ?>


    <main class="container">

        <form
            class="container__formulario"
            method="post">


            <h2 class="formulario__titulo">Envie um vídeo!</h3>
                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="url">Link embed</label>
                    <input
                    value="<?= $video['url']; ?>"
                    name="url"
                    class="campo__escrita"
                    required
                    placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g"
                    id='url' />
                </div>


                <div class="formulario__campo">
                    <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                    <input
                    value="<?= $video['title']; ?>"
                    name="titulo"
                    class="campo__escrita"
                    required placeholder="Neste campo, dê o nome do vídeo"
                    id='titulo' />
                </div>

                <input class="formulario__botao" type="submit" value="Enviar" />

               </form>

    </main>

    <?php  require_once __DIR__ . "/fim-html.php"; ?>

