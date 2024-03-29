<?php

require_once __DIR__ . '/../src/DateHelper.php';
require_once __DIR__ . '/Tester.php';

class TestDateHelper extends Tester
{
    public function run()
    {
        foreach ($this->methodList() as $method) {
            $this->$method();
        }
    }

    function isUpcomingIsTrue()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isUpcoming(
                new DateTime('2020-07-30')
            );
        $this->_isTrue($res);
    }

    function isUpcomingIsFalse()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isUpcoming(
                new DateTime('2020-01-01')
            );
        $this->_isFalse($res);
    }

    function isExpiredTrue()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isExpired(
                new DateTime('2020-01-03')
            );
        $this->_isTrue($res);
    }

    function isExpiredFalse()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isExpired(
                new DateTime('2020-11-03')
            );
        $this->_isFalse($res);
    }

    function isBetweenIsTrue_01()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isBetween(
                new DateTime('2020-01-03'),
                new DateTime('2021-01-03')
            );
        $this->_isTrue($res);
    }

    function isBetweenIsTrue_02()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isBetween(
                new DateTime('2020-06-30'),
                new DateTime('2021-01-03')
            );
        $this->_isTrue($res);
    }

    function isBetweenIsFalse()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isBetween(
                new DateTime('2020-05-30'),
                new DateTime('2020-06-03')
            );
        $this->_isFalse($res);
    }

    function isBetweenDateIsTrue_01()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isBetweenDate(
                new DateTime('2020-01-03'),
                new DateTime('2021-01-03')
            );
        $this->_isTrue($res);
    }

    function isBetweenDateIsTrue_02()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isBetweenDate(
                new DateTime('2020-06-30'),
                new DateTime('2021-01-03')
            );
        $this->_isTrue($res);
    }

    function isBetweenDateIsFalse()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isBetweenDate(
                new DateTime('2020-05-30'),
                new DateTime('2020-06-03')
            );
        $this->_isFalse($res);
    }

    function addDaysIsEqual_01()
    {
        $res = (new DateHelper('2020-06-30'))
            ->addDays(1);

        $this->_isEqual($res, new DateTime('2020-07-01'));
    }

    function addDaysIsEqual_02()
    {
        $res = (new DateHelper('2021-02-28'))
            ->addDays(1);

        $this->_isEqual($res, new DateTime('2021-03-01'));
    }

    function addDaysIsNotEqual()
    {
        $res = (new DateHelper('2020-06-30'))
            ->addDays(1);

        $this->_isNotEqual($res, new DateTime('2020-07-01'), true);
    }

    function isTodayIsTrue()
    {
        $res = (new DateHelper('NOW'))
            ->isDate(new DateTime('NOW'));

        $this->_isTrue($res);
    }

    function isTodayIsFalse_01()
    {
        $res = (new DateHelper('NOW'))
            ->isDate(new DateTime('YESTERDAY'));

        $this->_isFalse($res);
    }

    function isTodayIsFalse_02()
    {
        $res = (new DateHelper('NOW'))
            ->isDate(new DateTime('TOMORROW'));

        $this->_isFalse($res);
    }

    function isMondayIsTrue()
    {
        $res = (new DateHelper('2020-06-29'))
            ->isMonday();

        $this->_isTrue($res);
    }

    function isMondayIsFalse()
    {
        $res = (new DateHelper('2020-06-28'))
            ->isMonday();

        $this->_isFalse($res);
    }

    function isTuesdayIsTrue()
    {
        $res = (new DateHelper('2020-06-30'))
            ->isTuesday();

        $this->_isTrue($res);
    }

    function isTuesdayIsFalse()
    {
        $res = (new DateHelper('2020-06-29'))
            ->isTuesday();

        $this->_isFalse($res);
    }

    function isWednesdayIsTrue()
    {
        $res = (new DateHelper('2020-07-01'))
            ->isWednesday();

        $this->_isTrue($res);
    }

    function isWednesdayIsFalse()
    {
        $res = (new DateHelper('2020-06-28'))
            ->isWednesday();

        $this->_isFalse($res);
    }

    function isThursdayIsTrue()
    {
        $res = (new DateHelper('2020-07-02'))
            ->isThursday();

        $this->_isTrue($res);
    }

    function isThursdayIsFalse()
    {
        $res = (new DateHelper('2020-06-28'))
            ->isThursday();

        $this->_isFalse($res);
    }

    function isFridayIsTrue()
    {
        $res = (new DateHelper('2020-07-03'))
            ->isFriday();

        $this->_isTrue($res);
    }

    function isFridayIsFalse()
    {
        $res = (new DateHelper('2020-06-28'))
            ->isFriday();

        $this->_isFalse($res);
    }

    function isSaturdayIsTrue()
    {
        $res = (new DateHelper('2020-07-04'))
            ->isSaturday();

        $this->_isTrue($res);
    }

    function isSaturdayIsFalse()
    {
        $res = (new DateHelper('2020-06-28'))
            ->isSaturday();

        $this->_isFalse($res);
    }

    function isSundayIsTrue()
    {
        $res = (new DateHelper('2020-07-05'))
            ->isSunday();

        $this->_isTrue($res);
    }

    function isSundayIsFalse()
    {
        $res = (new DateHelper('2020-07-04'))
            ->isSunday();

        $this->_isFalse($res);
    }

    function isLeapYearTrue() {
        $res = (new DateHelper('2020-01-01'))
            ->isLeapYear();

        $this->_isTrue($res);
    }

    function isLeapYearFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isLeapYear();

        $this->_isFalse($res);
    }

    function isJanuaryTrue() {
        $res = (new DateHelper('2021-01-01'))
            ->isJanuary();

        $this->_isTrue($res);
    }

    function isJanuaryFalse() {
        $res = (new DateHelper('2021-11-01'))
            ->isJanuary();

        $this->_isFalse($res);
    }

    function isFebruaryTrue() {
        $res = (new DateHelper('2021-02-01'))
            ->isFebruary();

        $this->_isTrue($res);
    }

    function isFebruaryFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isFebruary();

        $this->_isFalse($res);
    }

    function isMarchTrue() {
        $res = (new DateHelper('2021-03-01'))
            ->isMarch();

        $this->_isTrue($res);
    }

    function isMarchFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isMarch();

        $this->_isFalse($res);
    }

    function isAprilTrue() {
        $res = (new DateHelper('2021-04-01'))
            ->isApril();

        $this->_isTrue($res);
    }

    function isAprilFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isApril();

        $this->_isFalse($res);
    }

    function isMayTrue() {
        $res = (new DateHelper('2021-05-01'))
            ->isMay();

        $this->_isTrue($res);
    }

    function isMayFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isMay();

        $this->_isFalse($res);
    }

    function isJuneTrue() {
        $res = (new DateHelper('2021-06-01'))
            ->isJune();

        $this->_isTrue($res);
    }

    function isJuneFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isJune();

        $this->_isFalse($res);
    }

    function isJulyTrue() {
        $res = (new DateHelper('2021-07-01'))
            ->isJuly();

        $this->_isTrue($res);
    }

    function isJulyFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isJuly();

        $this->_isFalse($res);
    }

    function isAugustTrue() {
        $res = (new DateHelper('2021-08-01'))
            ->isAugust();

        $this->_isTrue($res);
    }

    function isAugustFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isAugust();

        $this->_isFalse($res);
    }

    function isSeptemberTrue() {
        $res = (new DateHelper('2021-09-01'))
            ->isSeptember();

        $this->_isTrue($res);
    }

    function isSeptemberFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isSeptember();

        $this->_isFalse($res);
    }

    function isOctoberTrue() {
        $res = (new DateHelper('2021-10-01'))
            ->isOctober();

        $this->_isTrue($res);
    }

    function isOctoberFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isOctober();

        $this->_isFalse($res);
    }

    function isNovemberTrue() {
        $res = (new DateHelper('2021-11-01'))
            ->isNovember();

        $this->_isTrue($res);
    }

    function isNovemberFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isNovember();

        $this->_isFalse($res);
    }

    function isDecemberTrue() {
        $res = (new DateHelper('2021-12-01'))
            ->isDecember();

        $this->_isTrue($res);
    }

    function isDecemberFalse() {
        $res = (new DateHelper('2021-01-01'))
            ->isDecember();

        $this->_isFalse($res);
    }

}

(new TestDateHelper)->run();