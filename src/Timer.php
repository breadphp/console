<?php
namespace Bread\Console;

class Timer
{
    private $start;
    private $stop;

    public function start()
    {
        $this->start = microtime(true);
    }

    public function stop()
    {
        $this->stop = microtime(true);
        return $this->stop - $this->start;
    }
}
