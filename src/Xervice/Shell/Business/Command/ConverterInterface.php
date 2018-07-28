<?php
declare(strict_types=1);

namespace Xervice\Shell\Business\Command;

interface ConverterInterface
{
    /**
     * @param $command
     * @param string ...$params
     *
     * @return string
     */
    public function convert($command, ...$params): string;
}