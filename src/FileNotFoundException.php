<?php
namespace Pyncer\Exception;

use Pyncer\Exception\RuntimeException;
use Throwable;

class FileNotFoundException extends RuntimeException
{
    protected string $file;

    public function __construct(string $file, int $code = 0, ?Throwable $previous = null)
    {
        $this->file = $file;

        parent::__construct(
            'The specified file, ' . $file . ', was not found.',
            $code,
            $previous
        );
    }

    public function getMissingFile(): string
    {
        return $this->file;
    }
}
