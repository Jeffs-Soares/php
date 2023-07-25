<?php

namespace Alura\Mvc\Controller;

use Alura\Mvc\Entity\Video;
use Alura\Mvc\Helper\FlashMessageTrait;
use Alura\Mvc\Repository\VideoRepository;

class NewVideoController implements Controller
{
    use FlashMessageTrait;
    public function __construct(private VideoRepository $videoRepository)
    {}
    public function processaRequisicao(): void
    {
        $url = filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL);

        if ($url === false) {
            //$_SESSION['error_message'] = 'URL Inválida.';
            $this->addErrorMessage('URL Inválida.');
            header("Location: /cadastrar-video");
            return;
        }

        $titulo = filter_input(INPUT_POST, 'titulo');
        if ($titulo === false) {
            //$_SESSION['error_message'] = 'Título não informado.';
            $this->addErrorMessage('Título não informado.');
            header('Location: /cadastrar-video');
            return;
        }

        $video = new Video($url, $titulo);

        if($_FILES['image']['error'] === UPLOAD_ERR_OK){
            
            $safeFileName = uniqid('upload_') . '_' . pathinfo($_FILES['image']['name'], PATHINFO_BASENAME);

            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $mimeType = $finfo ->file($_FILES['image']['name']);

            if(str_starts_with($mimeType, 'image/')){
                move_uploaded_file(
                    $_FILES['image']['tmp_name'],
                    __DIR__ . '/../../public/img/uploads/' . $safeFileName

                );
                
                $video-> setFilePath($safeFileName);
            }
       
        }

        $success = $this->videoRepository->add($video);

        if ($success === false) {
            //$_SESSION['error_message'] = 'Erro ao cadastrar vídeo';
            $this->addErrorMessage('Erro ao cadastrar vídeo.');
            header('Location: /cadastrar-video');
        } else {
            header('Location: /?sucesso=1');
        }

    }

}


?>