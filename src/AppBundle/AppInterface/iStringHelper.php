<?php

namespace AppBundle\AppInterface;

interface iStringHelper
{
	public static function convertStringToDate($string);

	public static function convertDateToString($date);
}
