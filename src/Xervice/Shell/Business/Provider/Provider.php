<?php
declare(strict_types=1);


namespace Xervice\Shell\Business\Provider;


use Xervice\Shell\Business\Command\ConverterInterface;
use Xervice\Shell\Business\Executor\ExecutorInterface;

class Provider implements ProviderInterface
{
    /**
     * @var ExecutorInterface
     */
    private $executor;

    /**
     * @var \Xervice\Shell\Business\Command\ConverterInterface
     */
    private $conveter;

    /**
     * Provider constructor.
     *
     * @param \Xervice\Shell\Business\Executor\ExecutorInterface $executor
     * @param \Xervice\Shell\Business\Command\ConverterInterface $conveter
     */
    public function __construct(
        ExecutorInterface $executor,
        ConverterInterface $conveter
    ) {
        $this->executor = $executor;
        $this->conveter = $conveter;
    }


    /**
     * @param string $command
     * @param mixed ...$params
     *
     * @return string
     */
    public function execute(string $command, ...$params): string
    {
        return $this->executor->execute(
            $this->conveter->convert($command, ...$params)
        );
    }
}