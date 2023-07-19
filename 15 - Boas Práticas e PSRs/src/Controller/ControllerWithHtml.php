<?php 

namespace Alura\Mvc\Controller;

abstract class ControllerWithHtml implements Controller
{
    private const TEMPLATE_PATH = __DIR__ . "/../../views/";
    protected function renderTemplate(string $template, array $context=[]): void
    {
        /* Context pode ser vazio */
       extract($context);

        require_once self::TEMPLATE_PATH . $template . '.php';
    }

}


?>