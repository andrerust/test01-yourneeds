<?php
namespace AppBundle\Helper;

use DateTime;
use DateTimeZone;
use Main\AdminBundle\Helper\AbstractARCustomHelper;

class DateHelper extends AbstractARCustomHelper
{

	public static function dateToString(DateTime $date = null)
	{
		return $date->format('Y-m-d H:i:s');
	}

	public function getDateDifferenceInYears(DateTime $start = null, DateTime $end = null)
	{
		if (null !== $start && null !== $end) {
			$start->setTimezone(new DateTimeZone('Europe/Berlin'));
			$end->setTimezone(new DateTimeZone('Europe/Berlin'));

			$years = $start->diff($end)->y;
			return $years;
		}
		return null;
	}

	public function getDateDifferenceInMinutes(DateTime $start = null, DateTime $end = null)
	{
		if (null !== $start && null !== $end) {
			$start->setTimezone(new DateTimeZone('Europe/Berlin'));
			$end->setTimezone(new DateTimeZone('Europe/Berlin'));

			$days = $start->diff($end)->d;
			$hours = $start->diff($end)->h;
			$minutes = $start->diff($end)->i;
			$result = ($days * 1440) + ($hours * 60) + $minutes;
			return $result;
		}
		return null;
	}
}