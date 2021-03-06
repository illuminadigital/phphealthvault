<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use DLSUtils\Component\Validator\Constraints as DLSAssert;

use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\condition\Condition as hvCondition;
use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;

use DLS\Healthvault\Proxy\Type\CodableValue;


class Condition extends BaseThing
{
    protected $thingType = 'Condition';

    /*
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $status;

    /**
     * @Assert\Date
     * @DLSAssert\DateRange(max="today")
     *
     * @var date
     */
    protected $onsetDate;

    /**
     * @Assert\Date
     * @var date
     */
    protected $stopDate;

    /**
     * @var string
     */
    protected $stopReason;

    /**
     * @var string
     */
    protected $name;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {
        $this->status = new CodableValue('condition-occurrence');

        if ($healthvaultVocabulary)
        {

            $this->status->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);

    }

    public function setHealthvaultVocabulary(VocabularyInterface $healthvaultVocabulary){

        $this->status->setVocabularyInterface($healthvaultVocabulary);

        parent::setHealthvaultVocabulary($healthvaultVocabulary);

    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        if ($this->thing) {
            $this->setThingStatus($status);
        }

        return $this;
    }

    public function getOnsetDate()
    {
        return $this->onsetDate;
    }

    public function setOnsetDate($onsetDate)
    {
        $this->onsetDate = $onsetDate;

        if ($this->thing) {
            $this->setThingOnsetDate($onsetDate);
        }

        return $this;
    }

    public function getStopDate()
    {
        return $this->stopDate;
    }

    public function setStopDate($stopDate)
    {
        $this->stopDate = $stopDate;

        if ($this->thing) {
            $this->setThingStopDate($stopDate);
        }

        return $this;
    }

    public function getStopReason()
    {
        return $this->stopReason;
    }

    public function setStopReason($stopReason)
    {
        $this->stopReason = $stopReason;

        if ($this->thing) {
            $this->setThingStopReason($stopReason);
        }

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        if ($this->thing) {
            $this->setThingName($name);
        }

        return $this;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvCondition::ID);
    }

    public function setThing(Thing2 $hvCondition)
    {
        if ( ! self::supports($hvCondition) )
        {
            return FALSE;
        }

        $result = parent::setThing($hvCondition);
        if ( ! $result )
        {
            return $result;
        }

        $this->hvCondition = $hvCondition;

        $payloadArea = $this->getThingPayloadArea();
        $payload = $this->getThingPayload();

        $this->name = $payload->getName()->getText();
        $this->onsetDate = $this->getThingApproxDateTime($payload->getOnsetDate());
        $this->stopDate = $this->getThingApproxDateTime($payload->getStopDate());
        $this->stopReason = $payload->getStopReason();

        $status = $payload->getStatus();

        $this->status->setFromThingElement($status);

        $this->notes = $payloadArea->getCommon()->getNote();

        return $this;
    }

    public function getThing(Thing2 $hvCondition = NULL)
    {
        $hvCondition = parent::getThing($hvCondition);

        $this->setThingName($this->name);
        $this->setThingStatus($this->status);
        $this->setThingOnsetDate($this->onsetDate);
        $this->setThingStopDate($this->stopDate);
        $this->setThingStopReason($this->stopReason);
        $this->setThingNotes($this->notes);

        return $hvCondition;
    }

    protected function setThingName($name)
    {
        // FIXME: Get Category list(!)
        return $this->setThingCodableValue($this->getThingPayload()->getName(), $name, array());
    }

    protected function setThingOnsetDate($onsetDate)
    {
        $hvOnsetDate = $this->getThingPayload()->getOnsetDate();

        $this->setThingApproxDateTime($hvOnsetDate, $onsetDate);
    }

    protected function setThingStopDate($stopDate)
    {
        if ( ! empty($stopDate) )
        {
            $hvStopDate = $this->getThingPayload()->getStopDate();

            $this->setThingApproxDateTime($hvStopDate, $stopDate);
        }
        else
        {
            $this->getThingPayload()->setStopDate(NULL);
        }
    }

    protected function setThingStopReason($stopReason)
    {
        $this->getThingPayload()->setStopReason($stopReason);
    }

    protected function setThingStatus($status)
    {
        $payload = $this->getThingPayload();

        $this->status->updateToThingElement($payload->getStatus());
    }

    protected function getNewDataXmlContent() {
        return new hvCondition();
    }
}
