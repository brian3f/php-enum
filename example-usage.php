<?php
require_once ('src/enum.php');

//Example Class
class DaysOfWeek extends Enum {
	public static $MONDAY = 0;
	public static $SUNDAY = 1;
	// etc.
}
DaysOfWeek::enumerate();

//Type checking
function isMonday(DaysOfWeek $d) {
	if ($d == DaysOfWeek::$MONDAY) {
		return true;
	} else {
		return false;
	}
}

$day = DaysOfWeek::$MONDAY;
echo (isMonday($day) ? "bummer it's monday" : "Yay! it's not monday");
	