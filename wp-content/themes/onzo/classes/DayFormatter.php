<?php

class DayFormatter
{

	public static function format_day()
	{
		date_default_timezone_set('Europe/Kiev');
		$day = getdate()['wday'];
		date_default_timezone_set('UTC');

		switch ($day) {
			case 0:
				$now_day = 6;
				break;
			case 1:
				$now_day = 0;
				break;
			case 2:
				$now_day = 1;
				break;
			case 3:
				$now_day = 2;
				break;
			case 4:
				$now_day = 3;
				break;
			case 5:
				$now_day = 4;
				break;
			case 6:
				$now_day = 5;
				break;
			default:
				1;
		}
		return $now_day;
	}
	public static function work_time($start, $end)
	{
		$open = false;
		date_default_timezone_set('Europe/Kiev');
		$time_now = strtotime(date('Y-m-d') . ' ' . date('H:i'));
		$time_start = strtotime(date('Y-m-d') . ' ' . $start);
		$time_end = strtotime(date('Y-m-d') . ' ' . $end);
		if ($time_now >= $time_start && $time_now <= $time_end) {
			$open = true;
		}

		date_default_timezone_set('UTC');
		return $open;

	}
}
