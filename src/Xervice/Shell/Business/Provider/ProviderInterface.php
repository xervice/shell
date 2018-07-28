<?php
declare(strict_types=1);

namespace Xervice\Shell\Business\Provider;

interface ProviderInterface
{
    /**
     * @param string $command
     * @param mixed ...$params
     *
     * @return string
     */
    public function execute(string $command, ...$params): string;
}