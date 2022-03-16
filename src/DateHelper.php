<?php

class DateHelper
{
    protected $curDateTime = null;

    public function __construct($currentDate)
    {
        $this->curDateTime = new DateTime($currentDate);
    }

    public function addDays(int $days)
    {
        return $this
            ->curDateTime
            ->modify('+ ' . $days . ' DAYS');
    }

    function isBetween(DateTime $startDate, DateTime $endDate)
    {
        return $this->curDateTime >= $startDate && $this->curDateTime < $endDate;
    }

    function isBetweenDate(DateTime $startDate, DateTime $endDate)
    {
        $startDate->setTime(0, 0, 0);
        $endDate->setTime(23, 59, 59);
        return $this->curDateTime >= $startDate && $this->curDateTime <= $endDate;
    }

    function isDate(DateTime $dateTime)
    {
        return $this->curDateTime->format('Ymd') === $dateTime->format('Ymd');
    }

    function isExpired(DateTime $dateTime)
    {
        return $this->curDateTime >= $dateTime;
    }

    function isUpcoming(DateTime $dateTime)
    {
        return $this->curDateTime < $dateTime;
    }

    public function isMonday()
    {
        return (int)$this->curDateTime->format('N') === 1;
    }

    public function isTuesday()
    {
        return (int)$this->curDateTime->format('N') === 2;
    }

    public function isWednesday()
    {
        return (int)$this->curDateTime->format('N') === 3;
    }

    public function isThursday()
    {
        return (int)$this->curDateTime->format('N') === 4;
    }

    public function isFriday()
    {
        return (int)$this->curDateTime->format('N') === 5;
    }

    public function isSaturday()
    {
        return (int)$this->curDateTime->format('N') === 6;
    }

    public function isSunday()
    {
        return (int)$this->curDateTime->format('N') === 7;
    }

    public function isLeapYear() {
        return (int)$this->curDateTime->format('L');
    }
}
