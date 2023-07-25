<?php 

namespace Alura\Mvc\Helper;

trait HtmlRendererTrait
{

    
    private function renderTemplate(string $template, array $context = []): string
    {

        $templatePath = __DIR__ . "/../../views/";

        /* Context pode ser vazio */
        extract($context);

        ob_start();

        require_once $templatePath. $template . '.php';
        return ob_get_clean();
    }
}


?>