<?php
namespace Main\InsuranceBundle\Helper\Mapping\Tariff;

abstract class AbstractTariffStructure
{
	protected $structure = [];
	protected $abstractStructure = [
		[
			'name' => 'company',
			'mapName' => 'companyName',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'companyNameShort',
			'mapName' => 'companyNameShort',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'paymentInvervalAllowed',
			'mapName' => 'paymentInvervalAllowed',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'paymentInvervalExtraCharge',
			'mapName' => 'paymentInvervalExtraCharge',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'rankingPerformance',
			'mapName' => 'rankingPerformance',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'tariffName',
			'mapName' => 'tariffName',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'tariffId',
			'mapName' => 'tariffId',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'tariffIdTmp',
			'mapName' => 'tariffIdTmp',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'runTime',
			'mapName' => 'runTime',
			'resultText' => 'Laufzeit',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'fee',
			'mapName' => 'fee',
			'visibleInResult' => false,
			'doMap' => true
		],
		[
			'name' => 'retention',
			'mapName' => 'retention',
			'resultText' => 'Selbstbeteiligung',
			'visibleInResult' => true,
			'doMap' => true
		],
		[
			'name' => 'methodOfPayment',
			'mapName' => 'methodOfPayment',
			'visibleInResult' => false,
			'doMap' => false
		],
		[
			'name' => 'targetGroups',
			'visibleInResult' => false,
			'doMap' => false
		]
	];

	public function get()
	{
		return array_merge($this->abstractStructure, $this->structure);
	}
}