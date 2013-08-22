<?php
namespace DLS\Healthvault\Proxy\Type;

class DisplayValue
{
    /**
     * @var float
     */
    protected $value = null;

    /**
     * @var string
     */
    protected $units = null;

    /**
     * @var string
     */
    protected $unitsCode = null;

    public function __construct($thingElement = NULL)
    {

        if ( ! empty($thingElement) )
        {
            $this->setFromThingElement($thingElement);
        }
    }

    public function setDisplay($units,$unitsCode){
        $this->units = $units;
        $this->unitsCode = $unitsCode;
    }

    public function setFromThingElement($thingElement)
    {

        if(!empty($thingElement))
        {
            $this->value = $thingElement->getValue(FALSE);
            $this->units = $thingElement->getUnits(FALSE);
            $this->unitsCode = $thingElement->getUnitsCode(FALSE);
        }

    }

    public function updateToThingElement($thingElement)
    {
        $thingElement->setValue($this->value);
        $thingElement->setUnits($this->units);
        $thingElement->setUnitsCode($this->unitsCode);
    }

    /**
     * @param mixed $units
     */
    public function setUnits($units)
    {
        $this->units = $units;
    }

    /**
     * @return mixed
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * @param mixed $unitsCode
     */
    public function setUnitsCode($unitsCode)
    {
        $this->unitsCode = $unitsCode;
    }

    /**
     * @return mixed
     */
    public function getUnitsCode()
    {
        return $this->unitsCode;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function __toString(){
        $display = '';

        if(!empty($this->value)&&!empty($this->unitsCode)){
            $display = $this->value.' '.$this->unitsCode;
        }
        return $display;
    }
}