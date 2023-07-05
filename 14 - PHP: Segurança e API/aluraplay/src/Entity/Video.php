<?php

namespace Alura\Mvc\Entity;

class Video
{
    public readonly int $id;
    public readonly string $url;
    private ?string $filePath = null;

    public function __construct(
        string $url,
        public readonly string $title,
    ) {
        $this->setUrl($url);
    }

    private function setUrl(string $url)
    {
        $this->url = $url;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

}


?>