<?php
namespace DLS\Healthvault\Proxy\Type;

use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing2;

class ConcentrationValue extends BaseType{

    /**
     * @var \DLS\Healthvault\Proxy\Type\NonNegativeDouble
     */
    protected $mmolPerL;

    /**
     * @var \DLS\Healthvault\Proxy\Type\DisplayValue
     */
    protected $display;

    public function __construct(){

        $this->mmolPerL = new NonNegativeDouble();
        $this->display = new DisplayValue();
        $this->display->setDisplay('mmol/L','mmol-per-l');

    }

    public function getMmolPerL(){
        return $this->mmolPerL->getValue();
    }

    public function setMmolPerL($mmolPerL){

        $this->mmolPerL->setValue($mmolPerL);
        $this->display->setValue($mmolPerL);

    }

    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }

        $this->mmolPerL->setFromThingElement($thingElement->getMmolPerL(FALSE));
        $this->display->setFromThingElement($thingElement->getDisplay(FALSE));

    }

    public function updateToThingElement($thingElement)
    {
        $this->mmolPerL->updateToThingElement($thingElement->getMmolPerL());
        $this->display->updateToThingElement($thingElement->getDisplay());
    }

    public function __toString()
    {
        return (string)$this->display;
    }
}