<?php
declare(strict_types=1);


namespace Xervice\Shell\Business\Executor;


interface ExecutorInterface
{
    /**
     * @param $command
     *
     * @return string
     */
    public function execute($command): string;
}