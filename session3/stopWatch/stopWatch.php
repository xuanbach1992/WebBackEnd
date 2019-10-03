<?php


class StopWatch
{
    private $__timeStart;
    private $__timeEnd;

    public function __construct($__timeStart, $__timeEnd)
    {
        $this->start = $__timeStart;
        $this->end = $__timeEnd;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }

    public function start()
    {
        return date("Y-M-d h:m:s");
    }

    public function end()
    {
        return date("Y-M-d h:m:s");
    }
}