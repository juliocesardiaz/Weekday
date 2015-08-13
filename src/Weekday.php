<?php 
	class Weekday
	{
		function dayOfTheWeek($day, $month, $year)
		{
			date_default_timezone_set('UTC');
			$day_of_week = date("l", mktime(0, 0, 0, $month, $day, $year));
			return $day_of_week;
		}
	}
?>