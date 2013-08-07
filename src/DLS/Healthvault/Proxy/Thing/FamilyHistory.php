<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;


use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\family_history\FamilyHistory as hvFamilyHistory;
use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;
use com\microsoft\wc\types\CodedValue;
use com\microsoft\wc\types\CodableValue;

use DLS\Healthvault\Proxy\Type\Condition;
use DLS\Healthvault\Proxy\Type\FamilyHistoryRelative as Relative;

class FamilyHistory extends BaseThing
{
    protected $thingType = 'Family History';

    /**
     * @var array
     */
    private $condition;

    /**
     * @var \DLS\Healthvault\Proxy\Type\FamilyHistoryRelative
     */
    private $relative;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {

        $this->condition = array();

        $this->relative = new Relative();

        if ($healthvaultVocabulary){

            $this->relative->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }

    public function getConditions(){

        return $this->condition;

    }

    public function setConditions($conditions){

        $this->conditions = $conditions;

        if($this->thing)
        {
            $this->setThingCondition($conditions);
        }

        return $this;

    }

    public function setThingCondition($condition){

    }

    public function getRelative(){

        return $this->relative;

    }

    public function setRelative($relative){

        $this->relative = $relative;

        if($this->thing)
        {
            $this->setThingRelative($relative);
        }

        return $this;

    }

    public function setThingRelative($relative){}


    public function setThing(Thing2 $thing)
    {

        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->condition->setFromThingElement($payload->getCondition());

        $this->relative->setFromThingElement($payload->getRelative());

        return $result;
    }

    public function getThing(Thing2 $thing = NULL){

        $thing = parent::getThing($thing);

        $payload = $this->getThingPayload();

        $this->setThingCondition($this->condition);

        $this->setThingRelative($this->relative);

        return $thing;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return (strtolower($thing->getTypeId()->getValue()) == strtolower(hvFamilyHistory::ID));
    }

    protected function getNewDataXmlContent()
    {
        return new hvFamilyHistory();
    }

}