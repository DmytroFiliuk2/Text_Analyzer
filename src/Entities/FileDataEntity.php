<?php

namespace src\Entities;

class FileDataEntity
{
    /**
     * @var string
     */
    private string $filename;

    /**
     * @var string
     */
    private string $text;

    /**
     * FileDataEntity constructor.
     * @param string $filename
     * @param string $text
     */
    public function __construct(string $filename, string $text )
    {
        $this->filename = $filename;
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
}
