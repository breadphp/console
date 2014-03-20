<?php
namespace Bread\Console;

use Bread\Console\Colors;

class Logger
{
    private $colors;

    public function __construct()
    {
        $this->colors = new Colors();
    }

    public function log($string, $fgColor = null, $bgColor = null)
    {
        print $this->colors->getColoredString($string, $fgColor, $bgColor);
        print PHP_EOL;
    }
}
