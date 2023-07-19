<?php

require_once __DIR__ . "/inicio-html.php"; ?>

<main class="container">
    <form enctype="multipart/form-data" class="container__formulario" method="post">

        <h2 class="formulario__titulo">Envie um vídeo!</h3>
            <div class="formulario__campo">
                <label class="campo__etiqueta" for="url">Link embed</label>
                <input value="<?= $video?->url; ?>" name="url" class="campo__escrita" required
                    placeholder="Por exemplo: https://www.youtube.com/embed/FAY1K2aUg5g" id='url' />
            </div>

            <div class="formulario__campo">
                <label class="campo__etiqueta" for="titulo">Titulo do vídeo</label>
                <input value="<?= $video?->title; ?>" name="titulo" class="campo__escrita" required
                    placeholder="Neste campo, dê o nome do vídeo" id='titulo' />
            </div>

            <div class="formulario__campo">
                <label class="campo__etiqueta" for="image">Imagem do vídeo</label>
                <input accept="image/*" type="file" name="image" class="campo__escrita" id='image' />

            </div>

            <input class="formulario__botao" type="submit" value="Enviar" />

    </form>

</main>

<?php require_once __DIR__ . "/fim-html.php";