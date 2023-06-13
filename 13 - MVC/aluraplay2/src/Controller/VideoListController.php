<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Repository\VideoRepository;

class VideoListController
{
    private VideoRepository $videoRepository;

    public function __construct()
    {
        $host = "localhost";
        $port = "5432";
        $dbname = "alura";
        $user = "postgres";
        $password = "root";

        try {
            $pdo = new \PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }

        $this->videoRepository = new VideoRepository($pdo);

    }


    public function processaRequisicao(): void
    {
        $videoList = $this->videoRepository->all();

        require_once __DIR__ . "/../../inicio-html.php";

        ?>

        <ul class="videos__container" alt="videos alura">

            <?php foreach ($videoList as $video) { ?>

                <li class="videos__item">
                    <iframe width="100%" height="72%" src="<?php echo $video->url; ?>" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <div class="descricao-video">
                        <img src="./img/logo.png" alt="logo canal alura">
                        <h3>
                            <?php echo $video->title ?>
                        </h3>
                        <div class="acoes-video">
                            <a href="/atualizar-video?id=<?php echo $video->id; ?>">Editar</a>
                            <a href="/deletar-video?id=<?php echo $video->id; ?>">Excluir</a>
                        </div>
                    </div>
                </li>

            <?php } ?>


        </ul>

        <?php require_once __DIR__ . "../../fim-html.php";
    }
}