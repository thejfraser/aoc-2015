<?php

namespace Helpers;

class FileReader_ArraySplit extends FileReader
{
    protected $delimiter = ',';

    public function __construct($path, $delimiter = ',')
    {
        $this->delimiter = $delimiter;
        parent::__construct($path);
    }

    public function read($args = [])
    {
        $line = fgets($this->file);
        if (!$line) {
            return false;
        }
        return explode($this->delimiter, $line);
    }
}