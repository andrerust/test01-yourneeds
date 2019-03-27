<?php
namespace Main\InsuranceBundle\Helper\Damage;

use Psr\Log\LoggerInterface;

class PliDamageReportHelper extends AbstractDamageReportHelper
{
    protected $mandatoryParameters = [
        'dateOfDamage' => '00.00.0000',
        'streetAndStreetNoOfCause' => 'nicht angegeben',
        'zipOfCause' => 'nicht angegeben',
        'damageDescription' => 'nicht angegeben',
        'damageLocation' => 'nicht angegeben',
        'damageType' => 'item',
        'damageCauserName' => 'nicht angegeben',
        'personOfCause' => 'nicht angegeben',
        'personOfCauseStreetAndStreetNo' => 'nicht angegeben',
        'personOfCauseZip' => 'nicht angegeben',
        'personOfCauseCity' => 'nicht angegeben',
        'damageContactNumber' => 'nicht angegeben'
    ];
}