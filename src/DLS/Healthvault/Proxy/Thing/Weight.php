<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\weight\Weight as hvWeight;

use DLS\Healthvault\Proxy\Type\HeavyWeightValue;

class Weight extends WhenThing
{
    protected $thingType = 'Weight';
    
    /**
     * @Assert\NotBlank
     * 
     * @var \DLS\Healthvault\Proxy\Type\HeavyWeightValue
     */
    protected $weight;

    public function __construct(Thing2 $thing = NULL,
            VocabularyInterface $healthvaultVocabulary = NULL)
    {
        $this->weight = new HeavyWeightValue();
    
        parent::__construct($thing, $healthvaultVocabulary);
    }
    
    /**
     * @return the weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param  $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    protected function getNewDataXmlContent()
    {
        return new hvWeight();
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return (strtolower($thing->getTypeId()->getValue()) == strtolower(hvWeight::ID));
    }
    
    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);
        
        if ( ! $result )
        {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $value = $payload->getValue();
        
        $this->weight->setFromThingElement($value);
        
        return $result;
    }
    
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $payload = $this->getThingPayload();
        
        if ( ! is_object($this->weight) || $this->weight->isEmpty() ) {
            $thing->setValue(NULL);
            
        } else {
            $this->weight->updateToThingElement($payload->getValue());
        }
        
        return $thing;
    }
    
    public static function getDisplayFields()
    {
        return array(
            'when' => 'Date',
            'weight' => 'Weight',
        );
    }
}
