<?php
declare(strict_types=1);


namespace Xervice\Shell;


use Xervice\Core\Facade\AbstractFacade;

/**
 * @method \Xervice\Shell\ShellFactory getFactory()
 */
class ShellFacade extends AbstractFacade
{
    /**
     * @param string $command
     * @param string ...$params
     *
     * @return string
     */
    public function runCommand(string $command, ...$params): string
    {
        return $this->getFactory()->createProvider()->execute($command, ...$params);
    }
}