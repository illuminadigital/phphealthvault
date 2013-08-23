<?php
namespace DLS\Healthvault\Proxy\Type;

interface DisplayConvertibleValueInterface
{
    public static function getTypeOptions();

    public static function getTypeOptionChoices();
    
    public function getSelectedTypeData($typeCode = NULL);
    
    public function getUnits();
    
    public function getDisplayValue($normalisedUnit);

    public function getValueString($normalisedUnit);

    public function setFromNormalisedUnits($units,$normalizedUnit);

    public function getSelectedUnitData($unitCode = NULL);
    
    public function getCodeForTypeName($name);    
}
