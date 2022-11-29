<?php
namespace Pyncer\Exception;

use Pyncer\Exception\RuntimeException;
use Throwable;

class DirNotFoundException extends RuntimeException
{
    protected string $dir;

    public function __construct(string $dir, int $code = 0, ?Throwable $previous = null)
    {
        $this->dir = $dir;

        parent::__construct(
            'The specified dir, ' . $dir . ', was not found.',
            $code,
            $previous
        );
    }

    public function getMissingDir(): string
    {
        return $this->dir;
    }
}
