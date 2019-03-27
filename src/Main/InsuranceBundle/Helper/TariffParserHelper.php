<?php
namespace Main\InsuranceBundle\Helper;

class TariffParserHelper
{
	/*
	 * exchange variable names to readable values
	 */
	public static function tariffNormalizeReadability($tariff, $paramsList)
	{
		$tmpTariff = [];
		if (count($tariff) > 0 && count($paramsList) > 0) {
			foreach ($tariff as $key => $value) {
				if (is_array($value)) {
					if (isset($value[0]['bool']) && $value[0]['bool'] == 1) {

						if (isset($value[1]['values']) && !empty($value[1]['values'][0])) {
							$tmpTariff[$key][0] = ['bool' => 1];
							//echo $key . " // "; print_r($value[1]['values']);echo "<br><br>";
							foreach ($value[1]['values'] as $plusCollection) {
								foreach ($plusCollection as $plusKey => $plusValue) {
									if (isset($paramsList[$plusKey]))
										$plusKey = $paramsList[$plusKey];
									if (isset($paramsList[$plusValue]))
										$plusValue = $paramsList[$plusValue];
									$tmpTariff[$key][1]['values'][] = [$plusKey => $plusValue];
								}
							}
						} else {
							$tmpTariff[$key] = $value;
						}
					} else {
						if (isset($paramsList[$key]))
							$value = $paramsList[$key];
						$tmpTariff[$key] = $value;
					}
				} else {
					$tmpTariff[$key] = $value;
				}
			}
		}
		//print_r($tmpTariff);die;
		return $tmpTariff;
	}

	/*
	 * change tariff from json to array
	 */
	public static function tariffToArray($tariff, $paramsList, $process = null)
	{
		$result = [];
		if (count($tariff) > 0) {
			foreach ($tariff as $key => $value) {

				if ($process == null) {
					if ($paramsList != null) {
						foreach ($paramsList as $amountParamName) {
							if ($key === $amountParamName) {
								$tmpAmount = TariffHelper::jsonRequestToArray($value);
								$result[$amountParamName] = $tmpAmount;
							}
						}
					}

				} elseif ($process == 'survey-result') {
					//print_r($value);echo "<br><br>";
					$tmpAmount = json_decode($value, true);
					if (empty($tmpAmount)) {
						$tmpAmount = $value;
					}
					//$tmpAmount = TariffHelper::jsonRequestToArray($value);
					$result[$key] = $tmpAmount;
				}
			}
		}
		return $result;
	}

	/*
	* change tariff rates from json to array
	*/
	public static function tariffRatesToArray($tariffRates, $paramsList)
	{
		$tariffRatesList = [];
		if (count($tariffRates) > 0) {
			foreach ($tariffRates as $entry) {
				foreach ($paramsList as $amountParamName) {
					if (isset($entry[$amountParamName])) {
						$tmpAmount = TariffHelper::jsonRequestToArray($entry[$amountParamName]);
						$entry[$amountParamName] = $tmpAmount;
						$tariffRatesList[] = $entry;
					}
				}
			}
		}
		return $tariffRatesList;
	}

	/*
	 * PARSE TARIFF RATE PARAM
	 */
	public static function jsonRequestToArray($json)
	{
		$tmpJson = json_decode($json, true);
		if ($tmpJson != null) {
			$list = array();
			//sprint_r($tmpJson);//die;
			if (is_array($tmpJson)) {
				foreach ($tmpJson as $key => $value) {
					$list[$key] = $value;
				}
			}
			return $list;
		}
	}

	public static function findValue($params)
	{
		//print_r($params);echo "<br><br>";die;
		foreach ($params AS $key => $value) {
			if ($value != 0) {
				return [
					$key => $value
				];
			}
		}
	}

	private static function parseReadeability($param)
	{
		if ($param == "yes") {
			return "Ja";
		}
		if ($param == "qty") {
			return "Anzahl";
		}
		return $param;
	}

	private static function buildList($tmpParams)
	{
		if (count($tmpParams) > 1) {
			$list = array();
			foreach ($tmpParams as $key => $value) {
				if (is_object($value)) {
					$value = TariffHelper::buildList($value);
				}
				$key = TariffHelper::parseReadeability($key);
				$list[$key] = $value;
			}
			return $list;
		}
		return $tmpParams;
	}

	public static function parse($params)
	{
		//print_r($params);die;
		$tmpParams = json_decode($params, true);
		$list = TariffHelper::buildList($tmpParams);
		return $list;
	}

	// deprecated
	public function getTariffParam($param)
	{
		return key(json_decode($param, true));
	}

}