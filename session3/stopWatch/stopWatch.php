<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function start()
    {
        $this->startTime= microtime(true);
    }

    public function end()
    {
        $this->endTime= microtime(true);
    }

    function getElapsedTime()
    {
        return $this->getEndTime() - $this->getStartTime();
    }
}

$objWatch = new StopWatch();
$objWatch->start();
usleep(250000);//nghi
$objWatch->end();
echo $objWatch->getElapsedTime();