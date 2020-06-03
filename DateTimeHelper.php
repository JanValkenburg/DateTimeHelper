<?php

/**
 * Class DateTimeHelper
 */
class DateTimeHelper
{
    protected $dateTime;

    /**
     * DateTimeHelper constructor.
     * @param DateTime|null $dateTime
     */
    public function __construct(DateTime $dateTime = null)
    {
        if (null === $dateTime) {
            $dateTime = new DateTime();
        }
        $this->dateTime = $dateTime;
    }

    /**
     * @param $dateTime
     * @return bool|DateTime
     */
    public function dateTime($dateTime)
    {
        try {
            return new DateTime($dateTime);
        } catch (Exception $exception) {
            var_dump($exception->getMessage());
            return false;
        }
    }

    /**
     * @param float $days
     * @return bool|DateTime
     */
    public function modifyByDays(float $days)
    {
        return $this
            ->dateTime
            ->modify('+ ' . $days . ' DAY');
    }

    /**
     * @param $startDate
     * @param $endDate
     * @return bool
     */
    public function isBetween($startDate, $endDate) {
        return ($this->dateTime > $startDate && $this->dateTime < $endDate);
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        return $this->dateTime < new DateTime();
    }

    /**
     * @return bool
     */
    public function isUpcoming()
    {
        return $this->dateTime > new DateTime();
    }

    /**
     * @return bool
     */
    public function isDateExpired()
    {
        $this->dateTime->setTime(23, 59, 59);
        return $this->dateTime < new DateTime();
    }

    /**
     * @see https://www.php.net/manual/en/class.dateinterval.php
     * @return DateInterval|false
     */
    public function diff() {
        return date_diff($this->dateTime, new DateTime());
    }
}