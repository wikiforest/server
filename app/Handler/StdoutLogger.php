<?php

namespace App\Handler;

use Hyperf\Framework\Logger\StdoutLogger as LoggerStdoutLogger;
use Psr\Log\LogLevel;

class StdoutLogger extends LoggerStdoutLogger
{
    protected function getMessage(string $message, string $level = LogLevel::INFO, array $tags)
    {
        $template = sprintf('[%s]</>', strtoupper($level));
        return sprintf($template . ' %s', $message);
    }
}
