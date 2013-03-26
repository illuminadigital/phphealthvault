<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\VocabularyType;

class CodableValue extends VocabularyType
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $codedValue;

    /**
     * @var array
     */
    protected $vocabularies;

    /**
     * @var \DLS\Healthvault\Utilities\VocabularyInterface
     */
    protected $vocabularyInterface;
    
    public function __construct(VocabularyInterface $vocabularyInterface, $vocabularies = NULL) 
    {
        $this->vocabularyInterface = $vocabularyInterface;
        
        if ( ! empty($vocabularies) ) {
            $this->setVocabularies($vocabularies);
        }
    }

    public function setVocabularies($vocabularies)
    {
        if (!is_array($vocabularies) || isset($vocabularies['family'])) {
            $vocabularies = array(
                $vocabularies
            );
        }

        $this->vocabularies = array();

        foreach ($vocabularies as $thisVocabulary) {
            $this->addVocabulary($thisVocabulary);
        }
    }

    public function addVocabulary($vocabulary, $family = 'wc')
    {
        if (is_array($vocabulary)) {
            if (isset($vocabulary['family'])) {
                $family = $vocabulary['family'];
            }
            $vocabulary = $vocabulary['name'];
        } else {
            $parts = explode(':', $vocabulary);

            if (count($parts) > 1) {
                $family = $parts[1];
                $vocabulary = $parts[0];
            }
        }

        $key = sprintf('%s:%s', $vocabulary, $family);

        $this->vocabularies[$key] = array('name' => $vocabulary, 'family' => $family);
    }

    public function getVocabularies()
    {
        return implode(',', array_keys($this->vocabularies));
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text, $updateCodedValue = FALSE)
    {
        $this->text = $text;
        
        if ($updateCodedValue) {
            $this->updateCodedValue();
        }
    }

    public function getCodedValue()
    {
        return $this->codedValue;
    }

    public function setCodedValue($codedValue)
    {
        $this->codedValue = $codedValue;
    }
    
    public function updateCodedValue() {
        foreach ($this->vocabularies as $thisVocabulary) {
            $codedValue = $this->vocabularyInterface->getEntry($this->text, $thisVocabulary['name'], $thisVocabulary['family']);
            
            if ($codedValue) {
                $this->codedValue = sprintf('%s:%s:%s', $thisVocabulary['name'], $thisVocabulary['family'], $codedValue);
                
                return TRUE;
            }
        }
        
        $this->codedValue = NULL;
        
        return FALSE;
    }

    public function getVocabularyInterface()
    {
        return $this->vocabularyInterface;
    }

    public function setVocabularyInterface($vocabularyInterface)
    {
        $this->vocabularyInterface = $vocabularyInterface;
    }

    public function setFromThingElement($thingElement)
    {
        $this->text = $thingElement->getText();

        $codedValue = $thingElement->getCode();

        if ( ! empty($codedValue) ) {
            $this->codedValue = sprintf('%s:%s:%s', $codedValue[0]->getType(),
                    $codedValue[0]->getFamily(), $codedValue[0]->getValue());
        } else {
            $this->codedValue = NULL;
        }
            
        return $thingElement;
    }

    public function updateToThingElement($thingElement)
    {
        $thingElement->setText($this->text);

        if (empty($this->codedValue)) {
            $type = $family = $value = NULL;
        } else {
            list($type, $family, $value) = explode(':', $this->codedValue);
        }

        $codedValues = $thingElement->getCode();
        
        if (empty($codedValues)) {
            $codableType = get_class($thingElement);
            $codedType = str_replace('CodableValue', 'CodedValue', $codableType);
            
            $codedValue = new $codedType();
            
            $codedValues[] = $codedValue;
            $thingElement->setCode($codedValues);
        } else {
	        $codedValue = $codedValues[0];
        }

        $codedValue->setType($type);
        $codedValue->setFamily($family);
        $codedValue->setValue($value);
    }
    
    public function __toString() {
        return $this->text;
    }
}
