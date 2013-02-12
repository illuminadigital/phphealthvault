<?php
namespace Illumina\HealthTrackingBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing;
use com\microsoft\wc\thing\BloodPressure\BloodPressure as hvBloodPressure;

use Illumina\PhphealthvaultBundle\DependencyInjection\HealthvaultVocabulary;

class BloodPressure extends BaseThing
{
    protected $name = 'Blood Pressure';

    /**
     * @Assert\NotBlank()
     * @Assert\DateTime
     * @var date
     */
    protected $when;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("integer")
     * 
     * @var integer
     */
    protected $systolic;

    /**
     * @Assert\NotBlank()
     * @Assert\Type("integer")
     * 
     * @var integer
     */
    protected $diastolic;

    /**
     * @Assert\Type("integer")
     * 
     * @var integer
     */
    protected $pulse;

    /**
     * @Assert\Type("boolean")
     * 
     * @var boolean
     */
    protected $irregularHeartbeat;

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

    /**
     * @return the unknown_type
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return the integer
     */
    public function getSystolic()
    {
        return $this->systolic;
    }

    /**
     * @param  $systolic
     */
    public function setSystolic($systolic)
    {
        $this->systolic = $systolic;

        if ($this->thing) {
            $this->setThingSystolic($systolic);
        }

        return $this;
    }

    /**
     * @return the integer
     */
    public function getDiastolic()
    {
        return $this->diastolic;
    }

    /**
     * @param  $diastolic
     */
    public function setDiastolic($diastolic)
    {
        $this->diastolic = $diastolic;

        if ($this->thing) {
            $this->setThingDiastolic($diastolic);
        }

        return $this;
    }

    /**
     * @return the integer
     */
    public function getPulse()
    {
        return $this->pulse;
    }

    /**
     * @param  $pulse
     */
    public function setPulse($pulse)
    {
        $this->pulse = $pulse;

        if ($this->thing) {
            $this->setThingPulse($pulse);
        }

        return $this;
    }

    /**
     * @return the boolean
     */
    public function getIrregularHeartbeat()
    {
        return $this->irregularHeartbeat;
    }

    /**
     * @param  $irregularHeartbeat
     */
    public function setIrregularHeartbeat($irregularHeartbeat)
    {
        $this->irregularHeartbeat = $irregularHeartbeat;

        if ($this->thing) {
            $this->setThingIrregularHeartbeat($irregularHeartbeat);
        }

        return $this;
    }

    public static function reallySupports(Thing $thing)
    {
        return ($thing->getTypeId()->getValue() == hvBloodPressure::ID);
    }
    
    public function setThing(Thing $thing)
    {
        $result = parent::setThing($thing);
        
        if ( ! $result )
        {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $this->diastolic = $payload->getDiastolic()->getValue();
        $this->systolic = $payload->getSystolic()->getValue();
        $pulse = $payload->getPulse();
        if ($pulse && $pulse->getValue()) {
            $this->pulse = $pulse->getValue();
        }
        $this->irregularHeartbeat = $payload->getIrregularHeartbeat();
        
        return $this;
    }
    
    public function getThing(Thing $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingWhen($this->when);
        $this->setThingDiastolic((int)$this->diastolic);
        $this->setThingSystolic((int)$this->systolic);
        $this->setThingPulse($this->pulse ? (int) $this->pulse : NULL);
        $this->setThingIrregularHeartbeat((bool) $this->irregularHeartbeat);
        
        return $thing;
    }
    
    protected function setThingWhen($when)
    {
        $payload = $this->getThingPayload();
        $this->setThingDateTime($payload->getWhen(), $when);
        
        return $this;
    }
    
    protected function setThingDiastolic($diastolic)
    {
        $payload = $this->getThingPayload();
        $payload->getDiastolic()->setValue($diastolic);
        
        return $this;
    }
    
    protected function setThingSystolic($systolic)
    {
        $payload = $this->getThingPayload();
        $payload->getSystolic()->setValue($systolic);
        
        return $this;
    }
    
    protected function setThingPulse($pulse)
    {
        $payload = $this->getThingPayload();
        if ( ! $pulse ) 
        {
            $payload->setPulse(NULL);
        }
        else
        {
            $payload->getPulse()->setValue($pulse);
        }
        
        return $this;
    }
    
    protected function setThingIrregularHeartbeat($irregularHeartbeat)
    {
        $payload = $this->getThingPayload();
        $payload->setIrregularHeartbeat($irregularHeartbeat);
        
        return $this;
    }

    protected function getNewDataXmlContent()
    {
        return new hvBloodPressure();
    }
    
    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'diastolic' => 'Diastolic',
            'systolic' => 'Systolic',
            'pulse' => 'Pulse',
            'irregularHeartbeat' => 'Irregular?',
        );
    }
}
