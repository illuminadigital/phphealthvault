<?php
namespace DLS\Healthvault\Proxy\Type;

use com\microsoft\wc\thing\Thing2;

use DLS\Healthvault\Proxy\Type\Person;

class Prescription
{

    /**
     * @var \DLS\Healthvault\Proxy\Type\Person
     */
    protected $prescribedBy;

    /**
     * @var string
     */
    protected $instructions;

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( $result === FALSE ) {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->indication = $payload->getIndication()->getText();

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingName($this->name);

        return $thing;
    }

}
