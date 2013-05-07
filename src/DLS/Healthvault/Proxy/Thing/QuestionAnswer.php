<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
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
     * @var string
     */
    protected $answerChoice;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $answer;

    public function __construct(Thing2 $thing = NULL,
                                VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->question = new CodableValue();
        $this->answerChoice = new CodableValue();
        $this->answer = new CodableValue();

        parent::__construct($thing, $healthvaultVocabulary);
    }

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

        $payload = $this->getThingPayload();

        $this->question->updateToThingElement($payload->getQuestion());

        return $this;

    }

    public function getAnswerChoice(){
        return $this->answerChoice;
    }
    public function setAnswerChoice($answerChoice){

        $this->answerChoice = $answerChoice;

        if ($this->thing) {
            $this->setThingAnswerChoice($answerChoice);
        }

        return $this;

    }
    public function setThingAnswerChoice($answerChoice){

        $payload = $this->getThingPayload();

        $this->answerChoice->updateToThingElement($payload->getAnswerChoice());

        return $this;


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

        $payload = $this->getThingPayload();

        $this->answer->updateToThingElement($payload->getAnswer());

        return $this;


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

        //$this->setThingAnswer($this->answer);

        //$this->setThingAnswerChoice($this->answerChoice);

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