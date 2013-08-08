<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;


use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\family_history\FamilyHistory as hvFamilyHistory;
use com\microsoft\wc\thing\types\Condition as hvTypeCondition;
use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;
use com\microsoft\wc\types\CodedValue;
use com\microsoft\wc\types\CodableValue;

use DLS\Healthvault\Proxy\Type\Condition as TypeCondition;
use DLS\Healthvault\Proxy\Type\FamilyHistoryRelative as Relative;

class FamilyHistory extends BaseThing
{
    protected $thingType = 'Family History';

    /**
     * @var array
     */
    private $condition = array();

    /**
     * @var \DLS\Healthvault\Proxy\Type\FamilyHistoryRelative
     */
    private $relative;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {

        $this->relative = new Relative();

        $this->condition[] = new TypeCondition();


        if ($healthvaultVocabulary){

            $this->relative->setVocabularyInterface($healthvaultVocabulary);

            foreach($this->condition as $condition){

                $condition->setVocabularyInterface($healthvaultVocabulary);

            }

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }

    public function setHealthvaultVocabulary($healthvaultVocabulary){

        $this->relative->setVocabularyInterface($healthvaultVocabulary);

        foreach($this->condition as $condition){

            $condition->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::setHealthvaultVocabulary($healthvaultVocabulary);

    }

    public function getConditions(){

        return $this->condition;

    }

    public function setConditions($condition){

        $this->condition = $condition;

        if($this->thing)
        {
            $this->setThingCondition($condition);
        }

        return $this;

    }

    public function setThingCondition($condition){

        $payload = $this->getThingPayload();

        $conditions = array();

        foreach($this->condition as $condition){

            $hvTypeCondition = new hvTypeCondition();

            $condition->updateToThingElement($hvTypeCondition);

            $conditions[]=$hvTypeCondition;

        }

        $payload->setCondition($conditions);

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

    public function setThingRelative($relative){

        $payload = $this->getThingPayload();

        $this->relative->updateToThingElement($payload->getRelative());
    }

    public function setThing(Thing2 $thing)
    {

        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->condition=array();

        foreach($payload->getCondition() as $hvCondition){

            $condition = new TypeCondition();

            $condition->setFromThingElement($hvCondition);

            $this->condition[]=$condition;
        }

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