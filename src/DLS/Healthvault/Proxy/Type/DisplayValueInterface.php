<?php
namespace DLS\Healthvault\Proxy\Type;

interface DisplayValueInterface
{
    public static function getTypeOptions();

    public static function getTypeOptionChoices();
    
    public function getMajorValue();
    
    public function setMajorValue($majorValue);
    
    public function getMinorValue();
    
    public function setMinorValue($minorValue);
    
    public function getNormalisedValue();
    
    public function setNormalisedValue($normalisedValue);
    
    public function getSelectedTypeData($typeCode = NULL);
    
    public function getUnits();
    
    public function getDisplayValue();
    
    public static function getValueString($majorValue, $minorValue, $typeData);
    
    public function setFromNormalisedUnits($units);
    
    public function setFromUnits($units);
    
    public function setFromThingElement($thingElement);
    
    public function updateToThingElement($thingElement);
    
    public function getSelectedUnitData($unitCode = NULL);
    
    public function getCodeForTypeName($name);    
}
