<?php
namespace Main\InsuranceBundle\Helper\Api\MM\Map;

class AbstractApiToTariffMap
{
	protected $map = [];
	protected $abstractMap = [
		[
			'api' => 'ges',
			'tariff' => 'companyName',
			'parse' => true
		],
		[
			'api' => 'ges_kurz',
			'tariff' => 'companyNameShort',
			'parse' => true
		],
		[
			'api' => 'tar',
			'tariff' => 'tariffName',
			'parse' => true
		],
		[
			'api' => 'tarifnr',
			'tariff' => 'tariffId',
			'parse' => true
		],
		[
			'api' => 'tarifnrtemp',
			'tariff' => 'tariffIdTmp',
			'parse' => false
		],
		[
			'api' => 'tar_punkte',
			'tariff' => 'rankingPerformance',
			'parse' => true
		],
		[
			'api' => 'zw_erlaubt',
			'tariff' => 'paymentInvervalAllowed',
			'parse' => true
		],
		[
			'api' => 'zw_aufschlag',
			'tariff' => 'paymentInvervalExtraCharge',
			'parse' => true
		],
		[
			'api' => 'laufzeit',
			'tariff' => 'runTime',
			'parse' => true
		],
		[
			'api' => 'beitrag',
			'tariff' => 'fee',
			'parse' => true
		],
	];

	public function get()
	{
		return array_merge($this->abstractMap, $this->map);
	}
}
