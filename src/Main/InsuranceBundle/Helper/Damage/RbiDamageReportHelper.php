<?php
namespace Main\InsuranceBundle\Helper\Damage;

use Psr\Log\LoggerInterface;

class RbiDamageReportHelper extends AbstractDamageReportHelper
{
    protected $mandatoryParameters = [
        'dateOfDamage' => 'nicht angegeben',
        'kindOfDamage' => '',
        'fireDamageReason' => '',
        'fireDamageOpenFire' => 'no',
        'fireDamageExtinguished' => 'no',
        'fireDamageExtinguishedBy' => 'nicht angegeben',
        'fireDamageExtinguishedHow' => '',
        'lightningLocation' => 'misc',
        'lightningLocationMisc' => 'nicht angegeben',
        'lightningSigns' => 'nicht angegeben',
        'lightningLeadToFire' => 'no',
        'waterReason' => 'nicht angegeben',
        'waterInsideBuildingWhere' => 'nicht angegeben',
        'waterReasonIsPipes' => 'no',
        'waterReasonPipesOwner' => 'nicht angegeben',
        'waterReasonPipesCostsByUtilityCompany' => 'no',
        'stormProof' => 'nicht angegeben',
        'stormDamagedNeighbours' => 'nicht angegeben',

        'hasPoliceRegistration' => 'no',
        'policeRegistrationNumber' => 'nicht angegeben',
        'damageLocation' => 'nicht angegeben',
        'ownerOfRentalUnit' => 'nicht angegeben',

        'owner' => 'nicht angegeben',
        'ownerStreet' => 'nicht angegeben',
        'ownerZip' => 'nicht angegeben',
        'ownerCity' => 'nicht angegeben',
        'ownerPhoneNumber' => 'nicht angegeben',

        'damagesBuildingPart' => 'nicht angegeben',
        'valueOfDamage' => 'nicht angegeben',

        'damageContactNumber' => 'nicht angegeben',
        'damageDescription' => 'nicht angegeben'
    ];
}