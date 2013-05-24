<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\types\CodableValue as hvCodableValue;
use com\microsoft\wc\thing\question_answer\QuestionAnswer as hvQuestionAnswer;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

use DLS\Healthvault\Proxy\Type\QuestionAnswerType;

class QuestionAnswer extends WhenThing
{
    protected $thingType = 'Question Answer';

    /**
     * @var \DLS\Healthvault\Proxy\Thing\QuestionAnswerType
     */
    protected $questionAnswer;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {
        // The gaps will be filled in by the parent constructor
        $this->questionAnswer = new QuestionAnswerType();
        
        parent::__construct($thing, $healthvaultVocabulary);
    }

    public function getQuestion(){
        return $this->questionAnswer->getQuestion();
    }

    public function setQuestion($question){

        $this->questionAnswer->setQuestion($question);

        return $this;
    }
    
    public function getAnswer(){
        return $this->questionAnswer->getAnswer();
    }
    
    public function setAnswer($answer){
        $this->questionAnswer->setAnswer($answer);
        
        return $this;

    }

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( $result === FALSE ) {
            return $result;
        }

        $payload = $this->getThingPayload();
        $this->questionAnswer->setFromThingElement($payload);

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $payload = $this->getThingPayload();
        $this->questionAnswer->updateToThingElement($payload);
        
        return $thing;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvQuestionAnswer::ID);
    }

    protected function getNewDataXmlContent() {

        return new hvQuestionAnswer();

    }
}