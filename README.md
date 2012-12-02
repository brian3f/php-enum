php-enum
========

A class for creating PHP classes to mimic the functionality of Java Enums.

This approach allows for type checking for parameters passed to functions and code completion in IDE's.

Usage
-----

```<?php
class DaysOfWeek extends Enum {
	public static $MONDAY = 0;
	public static $SUNDAY = 1;
	// etc.
}
DaysOfWeek::enumerate();```

Type checking in practice:

```
function isMonday(DaysOfWeek $d) {
	if ($d == DaysOfWeek::$MONDAY) {
		return true;
	} else {
		return false;
	}
}

$day = DaysOfWeek::$MONDAY;
echo (isMonday($day) ? "bummer it's monday" : "Yay! it's not monday");```