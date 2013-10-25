<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use com\microsoft\wc\thing\Thing2;
use DLS\Healthvault\Utilities\VocabularyInterface;
use com\microsoft\wc\thing\height\Height as hvHeight;

use DLS\Healthvault\Proxy\Type\ShortLengthValue;

class Height extends WhenThing
{
    protected $thingType = 'Height';
    
    /**
     * @Assert\NotBlank()
     * 
     * @var \DLS\Healthvault\Proxy\Type\ShortLengthValue
     */
    protected $height;

    public function __construct(Thing2 $thing = NULL,
            VocabularyInterface $healthvaultVocabulary = NULL)
    {
        $this->height = new ShortLengthValue();
    
        parent::__construct($thing, $healthvaultVocabulary);
    }
    
    /**
     * @return the height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param  $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    protected function getNewDataXmlContent()
    {
        return new hvHeight();
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return (strtolower($thing->getTypeId()->getValue()) == strtolower(hvHeight::ID));
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
        
        $this->height->setFromThingElement($value);
        
        return $result;
    }
    
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $payload = $this->getThingPayload();
        
        if ( ! is_object($this->height) || $this->height->isEmpty() ) {
            $thing->setValue(NULL);
            
        } else {
            $this->height->updateToThingElement($payload->getValue());
        }
        
        return $thing;
    }
    
    public static function getDisplayFields()
    {
        return array(
            'when' => 'Date',
            'height' => 'Height',
        );
    }
}
