<?php
declare(strict_types=1);

namespace App;

use App\Handler\StdoutLogger;
use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;

class StdoutLoggerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);
        return make(StdoutLogger::class, ['config' => $config]);
    }
}
