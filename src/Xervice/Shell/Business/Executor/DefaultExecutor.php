<?php
declare(strict_types=1);


namespace Xervice\Shell\Business\Executor;


class DefaultExecutor implements ExecutorInterface
{
    /**
     * @param $command
     *
     * @return string
     */
    public function execute($command): string
    {
        ob_start();
        passthru($command);
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }

}