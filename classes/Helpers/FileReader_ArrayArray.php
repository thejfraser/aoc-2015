<?php

namespace Helpers;

class FileReader_ArrayArray extends FileReader
{
    public function __construct($path)
    {
        $this->fileExists($path);
        $this->content = explode(PHP_EOL, file_get_contents($path));
        array_walk($this->content, function (&$value) {
            $value = str_split($value);
        });
    }

    public function read($args = [])
    {
        return $this->content;
    }
}