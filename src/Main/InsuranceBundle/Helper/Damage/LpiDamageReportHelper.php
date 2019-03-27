<?php
namespace Main\InsuranceBundle\Helper\Damage;

use Psr\Log\LoggerInterface;

class LpiDamageReportHelper extends AbstractDamageReportHelper
{
    protected $mandatoryParameters = [
        'dateOfDamage' => '00.00.0000',
        'damageDescription' => 'nicht angegeben',
        'damageContactNumber' => 'nicht angegeben'
    ];

}