<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
#use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\peak_flow\PeakFlow as hvPeakFlow;

/**
 * @author Alistair MacDonald <alistair.macdonald@illumina.co.uk>
 *
 */
class PeakFlow extends ApproxWhenThing
{
    protected $thingType = 'Peak Flow Measurement';

    /**
     * @Assert\Type("double")
     * @Assert\GreaterThan(value=0)
     *
     * Peak Expiratory Flow (l/s)
     * 
     * @var double
     */
    protected $pef;

    /**
     * @Assert\Type("double")
     * 
     * Forced Expiratory Flow in 1s (l)
     *  
     * @var double
     */
    protected $fev1;
    

    /**
     * @return the double
     */
    public function getPef()
    {
        return $this->pef;
    }

    /**
     * @param  $pef Peak Expiratory Flow (l/s)
     */
    public function setPef($pef)
    {
        $this->pef = $pef;
    }

    /**
     * @return the double
     */
    public function getFev1()
    {
        return $this->fev1;
    }

    /**
     * @param  $fev1 Forced Expiratory Flow in 1s (l)
     */
    public function setFev1($fev1)
    {
        $this->fev1 = $fev1;
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvPeakFlow::ID);
    }

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);
        
        if ( ! $result )
        {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $this->pef = $payload->getPef()->getLitersPerSecond()->getValue();
        $this->fev1 = $payload->getFev1()->getLiters()->getValue();
        
        return $this;
    }
    
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingPef($this->pef);
        $this->setThingFev1($this->fev1);
        
        return $thing;
    }
    
    public function setThingPef($pef)
    {
        $payload = $this->getThingPayload();
        
        $payload->getPef()->getLitersPerSecond()->setValue($pef);
        $display = $payload->getPef()->getDisplay();
        $display->setValue($pef);
        $display->setUnits( (string) $pef);
        
        return $this;
    }
    
    public function setThingFev1($fev1)
    {
        $payload = $this->getThingPayload();
        
        $payload->getFev1()->getLiters()->setValue($fev1);
        $display = $payload->getFev1()->getDisplay();
        $display->setValue($fev1);
        $display->setUnits( (string) $fev1);
        
        return $this;
   }
    
    protected function getNewDataXmlContent()
    {
        return new hvPeakFlow();
    }
    
    public static function getDisplayFields()
    {
        return array(
            'when' => 'Date',
            'pef' => 'Peak Expiratory Flow (l/s)',
            'fev1' => 'Forced Expiratory Flow in 1s (l)',
        );
    }
}
