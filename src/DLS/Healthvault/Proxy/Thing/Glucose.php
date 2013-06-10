<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\BloodGlucose\BloodGlucose;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

class Glucose extends WhenThing
{
    protected $thingType = 'Glucose Measurement';
    
    /**
     * @Assert\NotBlank()
     * @Assert\Type(type="double")
     * @var double;
     */
    protected $value;

    /**
     * @Assert\NotBlank()
     * 
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    /* @Validate\InHealthvaultVocabulary("glucose-measurement-type") 
     * @var string
     */
    protected $glucoseMeasurementType;

    /**
     * @Assert\Type("integer")
     * @Assert\Min(1)
     * @Assert\Max(5)
     * 
     * @var integer
     */
    protected $normalcy;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    /*
     * @Validate\InHealthvaultVocabulary(vocabulary="glucose-measurement-context", required=false)
     * @var string
     */
    protected $measurementContext;
    
    public function __construct(Thing2 $thing = NULL,
            VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->measurementContext = new CodableValue('glucose-measurement-context');
        $this->glucoseMeasurementType = new CodableValue('glucose-measurement-type');
        
        if ($healthvaultVocabulary) {
            $this->measurementContext->setVocabularyInterface($healthvaultVocabulary);
            $this->glucoseMeasurementType->setVocabularyInterface($healthvaultVocabulary);
        }
        
        parent::__construct($thing, $healthvaultVocabulary);
    }

    /**
     * @return the double;
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param  $value
     */
    public function setValue($value)
    {
        $this->value = $value;

        if ($this->thing) {
            $this->setThingValue($value);
        }
        
        return $this;
    }

    /**
     * @return the string
     */
    public function getGlucoseMeasurementType()
    {
        return $this->glucoseMeasurementType;
    }

    /**
     * @param  $glucoseMeasurementType
     */
    public function setGlucoseMeasurementType($glucoseMeasurementType)
    {
        $this->glucoseMeasurementType = $glucoseMeasurementType;

        if ($this->thing) {
            $this->setThingGlucoseMeasurementType($glucoseMeasurementType);
        }
        
        return $this;
    }

    /**
     * @return the integer
     */
    public function getNormalcy()
    {
        return $this->normalcy;
    }

    /**
     * @param  $normalcy
     */
    public function setNormalcy($normalcy)
    {
        $this->normalcy = $normalcy;

        if ($this->thing) {
            $this->setThingNormalcy($normalcy);
        }
        
        return $this;
    }

    /**
     * @return the string
     */
    public function getMeasurementContext()
    {
        return $this->measurementContext;
    }

    /**
     * @param  $measurementContext
     */
    public function setMeasurementContext($measurementContext)
    {
        $this->measurementContext = $measurementContext;

        if ($this->thing) {
            $this->setThingMeasurementContext($measurementContext);
        }
        
        return $this;
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == BloodGlucose::ID);
    }
    
    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);
        
        if ( $result === FALSE ) {
            return $result;
        }
        
        $payload = $this->getThingPayload();
        
        $this->value = $payload->getValue()->getMmolPerL()->getValue();
        $this->normalcy = $payload->getNormalcy()->getValue();
        
        $type = $payload->getGlucoseMeasurementType();
        /*
        if ($type && is_object($type->getCode())) {
            $this->glucoseMeasurementType = $type->getCode()->getValue();
        }*/
        $context = $payload->getMeasurementContext();
        /*
        if ($context && is_object($context->getCode())) {
            $this->measurementContext = $context->getCode()->getValue();
        }
        */
        $this->glucoseMeasurementType->setFromThingElement($type);
        $this->measurementContext->setFromThingElement($context);
        
        return $this;
    }
    
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        
        $this->setThingValue($this->value);
        $this->setThingGlucoseMeasurementType($this->glucoseMeasurementType);
        $this->setThingNormalcy($this->normalcy);
        $this->setThingMeasurementContext($this->measurementContext);
        
        return $thing;
    }
    
    protected function setThingValue($value) {
        $payload = $this->getThingPayload();
        $payload->getValue()->getMmolPerL()->setValue($value);
        
        return $this;
    }
    
    protected function setThingGlucoseMeasurementType($type) {
        $payload = $this->getThingPayload();

        /*
        $this->setThingCodableValue($payload->getGlucoseMeasurementType(), $this->glucoseMeasurementType, array('glucose-measurement-type'));
        */
        $this->glucoseMeasurementType->updateToThingElement($payload->getGlucoseMeasurementType());
        
        return $this;
    }
    
    protected function setThingNormalcy($normalcy) {
        $payload = $this->getThingPayload();
        
        if ( empty($normalcy) || ! ($normalcy = (int) $normalcy) ) {
            $payload->setNormalcy(NULL);
        } else {
            $payload->getNormalcy()->setValue($normalcy);
        }
        
        return $this;
    }
    
    protected function setThingMeasurementContext($context) {
        $payload = $this->getThingPayload();
        
        /*
        $this->setThingCodableValue($payload->getMeasurementContext(), $this->measurementContext, array('glucose-measurement-context'));
        */
        $this->measurementContext->updateToThingElement($payload->getMeasurementContext());
        
        return $this;
    }
    
    protected function getNewDataXmlContent() {
        return new BloodGlucose();
    }
    
    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'value' => 'Blood Glucose (mmol/L)',
            'measurementContext' => 'Measurement Context',
            'glucoseMeasurementType' => 'Type',
        );
    }
}
