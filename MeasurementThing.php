<?php
namespace Illumina\HealthTrackingBundle\Entity;

use com\microsoft\wc\thing\Thing;

use Symfony\Component\Validator\Constraints as Assert;

abstract class MeasurementThing extends BaseThing
{
    /**
     * @Assert\NotBlank()
     * @Assert\DateTime
     * @var date
     */
    protected $when;
    
    public function __construct(Thing $thing = NULL,
            HealthvaultVocabulary $healthvaultVocabulary = NULL)
    {
        parent::__construct($thing, $healthvaultVocabulary);
    
        if (empty($this->when)) {
            $this->setWhen(date('Y-m-d H:i:s'));
        }
    }
    
    /**
     * @return the date
     */
    public function getWhen()
    {
        return $this->when;
    }
    
    /**
     * @param  $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    
        if ($this->thing) {
            $this->setThingWhen($when);
        }
    
        return $this;
    }
    
    public function setThing(Thing $thing)
    {
        $result = parent::setThing($thing);
    
        if ( ! $result )
        {
            return $result;
        }
        
        $this->when = $this->getThingWhen();
    
        return $this;
    }
    
    public function getThing(Thing $thing = NULL)
    {
        $thing = parent::getThing($thing);
    
        $this->setThingWhen($this->when);

        return $thing;
    }

    protected function setThingWhen($when)
    {
        $payload = $this->getThingPayload();
        $this->setThingDateTime($payload->getWhen(), $when);
        
        return $this;
    }
    
    protected function getThingWhen()
    {
        $payload = $this->getThingPayload();
        $this->getThingDateTime($payload->getWhen());
        
        return $this;
    }
}
