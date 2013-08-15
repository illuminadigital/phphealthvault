<?php
namespace DLS\Healthvault\Proxy\Type;

use Symfony\Component\Validator\Constraints as Assert;
use DLSUtils\Component\Validator\Constraints as DLSAssert;

use DLS\Healthvault\Utilities\DateTimeUtils;
use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Type\CodableValue;

use com\microsoft\wc\thing\Thing2;

class Condition extends VocabularyType
{
    /**
     * @Assert\NotNull()
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $name;

    /**
     * @Assert\Date
     * @DLSAssert\DateRange(max="today")
     *
     * @var \DateTime
     */
    protected $onsetDate;

    /**
     * @Assert\Date
     * @DLSAssert\DateRange(max="today")
     *
     * @var \DateTime
     */
    protected $resolutionDate;

    /**
     * @var string
     */
    protected $resolution;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $occurrence;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $severity;

    public function __construct(Thing2 $thingElement = NULL,VocabularyInterface $vocabulary = NULL)
    {
        $this->name = new CodableValue('family-history-condition');

        $this->occurrence = new CodableValue('condition-occurrence');

        $this->severity = new CodableValue('condition-severity');

        if ($vocabulary){

            $this->name->setVocabularyInterface($vocabulary);

            $this->occurrence->setVocabularyInterface($vocabulary);

            $this->severity->setVocabularyInterface($vocabulary);

        }

        parent::__construct($thingElement);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getOnsetDate()
    {
        return $this->onsetDate;
    }

    public function setOnsetDate($onsetDate)
    {
        $this->onsetDate = $onsetDate;

        return $this;
    }
    public function getResolutionDate()
    {
        return $this->resolutionDate;
    }

    public function setResolutionDate($resolutionDate)
    {
        return $this->resolutionDate;
        return $this;
    }

    public function getResolution(){
        return $this->resolution;
    }
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getOccurrence()
    {
        return $this->occurrence;
    }

    public function setOccurrence($occurrence)
    {
        $this->occurrence = $occurrence;

        return $this;
    }

    public function getSeverity()
    {
        return $this->severity;
    }

    public function setSeverity($severity)
    {
        $this->severity = $severity;

        return $this;
    }

    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }

        $this->name->setVocabularyInterface($this->vocabularyInterface);
        $this->name->setFromThingElement($thingElement->getName(FALSE));

        $onsetDate = $thingElement->getOnsetDate(FALSE);
        $this->onsetDate = ( empty ($onsetDate) )?null:DateTimeUtils::getThingApproxDate($onsetDate);

        $resolutionDate = $thingElement->getResolutionDate(FALSE);
        $this->resolutionDate = ( empty ($resolutionDate) )?null:DateTimeUtils::getThingApproxDate($resolutionDate);

        $this->occurrence->setVocabularyInterface($this->vocabularyInterface);
        $this->occurrence->setFromThingElement($thingElement->getOccurrence(FALSE));

        $this->severity->setVocabularyInterface($this->vocabularyInterface);
        $this->severity->setFromThingElement($thingElement->getSeverity(FALSE));

    }

    public function updateToThingElement($thingElement)
    {

        $this->name->setVocabularyInterface($this->vocabularyInterface);
        if ( ! $this->name->isEmpty() ) {
            $this->name->updateToThingElement($thingElement->getName());
        } else {
            $thingElement->getName(NULL);
        }

        if( ! empty ($this->onsetDate) ){

            DateTimeUtils::setThingApproxDate($thingElement->getOnsetDate(),$this->onsetDate);

        }else{
            $thingElement->getOnsetDate(FALSE);
        }

        if( ! empty ($this->resolutionDate) ){

            DateTimeUtils::setThingApproxDate($thingElement->getResolutionDate(),$this->resolutionDate);

        }else{

            $thingElement->getResolutionDate(FALSE);
        }


        $this->occurrence->setVocabularyInterface($this->vocabularyInterface);
        if ( ! $this->occurrence->isEmpty() ) {

            $this->occurrence->updateToThingElement($thingElement->getOccurrence());
        } else {
            $thingElement->getOccurrence(NULL);
        }

        $this->severity->setVocabularyInterface($this->vocabularyInterface);
        if ( ! $this->severity->isEmpty() ) {
            $this->severity->updateToThingElement($thingElement->getSeverity());
        } else {
            $thingElement->getSeverity(NULL);
        }

    }

    public function setVocabularyInterface($vocabularyInterface)
    {
        $this->name->setVocabularyInterface($vocabularyInterface);

        $this->occurrence->setVocabularyInterface($vocabularyInterface);

        $this->severity->setVocabularyInterface($vocabularyInterface);

        $this->vocabularyInterface = $vocabularyInterface;
    }

    public function __toString(){
        $name = '';

        if( $this->name->getText()){

            $name = $this->name->getText();

        }
        return  $name;
    }
}