# PHP DateTime Helper
This PHP DataTimeHelper class includes several methods to
validate dates and like checking of the date is in the 
future or has expired or is between two dates and even to
check if the weekday is Friday.

### Modify date
####addDays
```
$DateTime = (new DateHelper('2020-06-30'))
    ->addDays(1);
```

### IS

#### isBetween
```
$isTrue = (new DateHelper('2020-06-30'))
    ->isBetween(
        new DateTime('2020-01-03'),
        new DateTime('2021-01-03')
    );
```

#### isBetweenDate
```
$isTrue = (new DateHelper('2020-06-30'))
    ->isBetweenDate(
        new DateTime('2020-06-30'),
        new DateTime('2021-01-03')
    );
```

#### isDate
```
$isTrue = (new DateHelper('NOW'))
    ->isDate(new DateTime('NOW'));
```

#### isExpired
```
$isTrue = (new DateHelper('2020-06-30'))
    ->isExpired(
        new DateTime('2020-01-03')
    );
```

#### isUpcoming
```
$isTrue = (new DateHelper('2020-06-30'))
    ->isUpcoming(
        new DateTime('2020-07-30')
    );
```

### Is Weekday
#### isMonday
```
$isTrue = (new DateHelper('2020-06-28'))
    ->isMonday();
```

#### isTuesday
```
$isTrue = (new DateHelper('2020-06-29'))
    ->isTuesday();
```

#### isWednesday
```
$isTrue = (new DateHelper('2020-07-01'))
    ->isWednesday();
```

#### isThursday
```
$isTrue = (new DateHelper('2020-07-02'))
    ->isThursday();
```

#### isFriday
```
$isTrue = (new DateHelper('2020-07-03'))
    ->isFriday();
```

#### isSaturday
```
$isTrue = (new DateHelper('2020-07-04'))
    ->isSaturday();
```

#### isSunday
```
$isTrue = (new DateHelper('2020-07-05'))
    ->isSunday();
```