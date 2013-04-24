<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Type\CodableValue;

class StructuredMeasurement
{

    /**
     * @var string
     */
    protected $value;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $units;

    public function __construct($vocabularies = NULL)
    {
        $this->units = new CodableValue($vocabularies);
    }

    public function setVocabularies($vocabularies){

        $this->units->setVocabularies($vocabularies);
    }

    public function setVocabularyInterface($vocabularyInterface)
    {
        $this->units->setVocabularyInterface($vocabularyInterface);

    }

    public function getVocabularies(){

        return $this->units->getVocabularies();
    }

    public function getVocabularyInterface()
    {
      return $this->units->getVocabularyInterface();
    }


    public function getValue(){

        return $this->value;

    }

    public function setValue($value){

        $this->value = $value;

    }

    public function getUnits(){

        return $this->units;

    }

    public function setUnits(CodableValue $units){

        $this->units = $units;

    }

    public function setFromThingElement($thingElement){

        $this->value = $thingElement->getValue();

        $this->units->setFromThingElement($thingElement->getUnits());

        return $thingElement;
    }

}