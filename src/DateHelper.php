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

    public function isJanuary()
    {
        return (int)$this->curDateTime->format('m') === 1;
    }

    public function isFebruary()
    {
        return (int)$this->curDateTime->format('m') === 2;
    }

    public function isMarch()
    {
        return (int)$this->curDateTime->format('m') === 3;
    }

    public function isApril()
    {
        return (int)$this->curDateTime->format('m') === 4;
    }

    public function isMay()
    {
        return (int)$this->curDateTime->format('m') === 5;
    }

    public function isJune()
    {
        return (int)$this->curDateTime->format('m') === 6;
    }

    public function isJuly()
    {
        return (int)$this->curDateTime->format('m') === 7;
    }

    public function isAugust()
    {
        return (int)$this->curDateTime->format('m') === 8;
    }

    public function isSeptember()
    {
        return (int)$this->curDateTime->format('m') === 9;
    }

    public function isOctober()
    {
        return (int)$this->curDateTime->format('m') === 10;
    }

    public function isNovember()
    {
        return (int)$this->curDateTime->format('m') === 11;
    }

    public function isDecember()
    {
        return (int)$this->curDateTime->format('m') === 12;
    }

    public function isLeapYear() {
        return (int)$this->curDateTime->format('L');
    }
}
