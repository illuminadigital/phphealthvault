<?php

namespace DLS\Healthvault\Proxy\Type;

class NonNegativeDouble{

    /**
     * @Assert\Type("float")
     * @Assert\Range(min=0)
     * @var integer
     */

    protected $value;

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

    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }

        $this->value = $thingElement->getValue(FALSE);

    }

    public function updateToThingElement($thingElement)
    {
        $thingElement->setValue($this->value);

    }

    public function __toString() {
        return (string) $this->value;
    }

}