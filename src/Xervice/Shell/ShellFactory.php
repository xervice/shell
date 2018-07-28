<?php
declare(strict_types=1);


namespace Xervice\Shell;


use Xervice\Shell\Business\Command\Converter;
use Xervice\Shell\Business\Command\ConverterInterface;
use Xervice\Shell\Business\Executor\DefaultExecutor;
use Xervice\Shell\Business\Executor\ExecutorInterface;
use Xervice\Shell\Business\Provider\Provider;
use Xervice\Shell\Business\Provider\ProviderInterface;
use Xervice\Core\Factory\AbstractFactory;

class ShellFactory extends AbstractFactory
{
    /**
     * @return \Xervice\Shell\Business\Provider\ProviderInterface
     */
    public function createProvider(): ProviderInterface
    {
        return new Provider(
            $this->createExecutor(),
            $this->createConverter()
        );
    }

    /**
     * @return \Xervice\Shell\Business\Executor\DefaultExecutor
     */
    public function createExecutor(): ExecutorInterface
    {
        return new DefaultExecutor();
    }

    /**
     * @return \Xervice\Shell\Business\Command\Converter
     */
    public function createConverter(): ConverterInterface
    {
        return new Converter();
    }
}