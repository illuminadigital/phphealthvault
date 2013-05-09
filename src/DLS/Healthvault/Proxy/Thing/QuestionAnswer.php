<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\types\CodableValue as hvCodableValue;
use com\microsoft\wc\thing\question_answer\QuestionAnswer as hvQuestionAnswer;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

class QuestionAnswer extends WhenThing
{
    protected $thingType = 'Question Answer';


    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $question;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $answer;

    public function getQuestion(){
        return $this->question;
    }

    public function setQuestion($question){

        $this->question = $question;

        if ($this->thing) {
            $this->setThingQuestion($question);
        }

        return $this;

    }
    public function setThingQuestion($question){

        $payloadQuestion = $this->getThingPayload()->getQuestion();

        return $this->setThingCodableValue($payloadQuestion, $question, array());

    }

    public function getAnswer(){
        return $this->answer;
    }
    public function setAnswer($answer){

        $this->answer = $answer;

        if ($this->thing) {
            $this->setThingAnswer($answer);
        }

        return $this;

    }
    public function setThingAnswer($answer){

        $payloadAnswer = $this->getThingPayload()->getAnswer();

        if(is_array($payloadAnswer)){

            $payloadAnswerItem = new hvCodableValue();

        }

        $this->setThingCodableValue($payloadAnswerItem, (string)$answer, array());

        $this->getThingPayload()->setAnswer(array($payloadAnswerItem));

    }


    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( $result === FALSE ) {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->question = $payload->getQuestion()->getText();

        $this->answer = current($payload->getAnswer())->getText();

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingQuestion($this->question);

        $this->setThingAnswer($this->answer);


        $qa = current(current($thing->getDataXml())->getAny());

        $q = $qa->getQuestion();

        $a = $qa->getAnswer();

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