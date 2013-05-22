<?php
namespace DLS\Healthvault\Proxy\Type;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\types\CodableValue as hvCodableValue;
use com\microsoft\wc\thing\question_answer\QuestionAnswer as hvQuestionAnswer;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

use DLS\Healthvault\Proxy\Type\VocabularyType;

class QuestionAnswerType extends VocabularyType
{
    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $question;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue[]
     */
    protected $answers;

    public function __construct($thingElement = NULL, $vocabularyInterface = NULL)
    {
        $this->setVocabularyInterface($vocabularyInterface);
        
        $this->question = new CodableValue();
        $this->answers = array();
        
        parent::__construct($thingElement);
    }
    
    public function getQuestion($textOnly = TRUE){
        if ($textOnly) {
            return $this->question->getText();
        } else {
            return $this->question;
        }
    }

    public function setQuestion($question){
        if ($question instanceof CodableValue) {
            $this->question = $question;
        } else {
            $this->question->setText($question);
        }

        return $this;
    }
    
    public function getAnswer($index = 0, $textOnly = TRUE) 
    {
        if ( isset($this->answers[$index]) ) {
            if ($textOnly) {
                return $this->answers[$index]->getText();
            } else {
                return $this->answers[$index];
            }
        }

        return NULL;
    }

    public function setAnswer($answer, $index = 0){
        if ($answer instanceof CodableValue) {
            $this->answers[$index] = $answer;
        } else {
            if ( empty($this->answers[$index]) ) {
                $this->answers[$index] = new CodableValue();
            }
            
            $this->answers[$index]->setText((string)$answer);
        }        

        return $this;
    }
    
    public function getAnswers($textOnly = TRUE) 
    {
        if ($textOnly) {
            $answers = array();
            
            foreach ($this->answers as $index => $thisAnswer) {
                $answers[$index] = $thisAnswer->getText();
            }
            
            return $answers;
        }
        
        return $this->answers;
    }

    public function setAnswers($answers){
        $newAnswers = array();
        
        foreach ($answers as $index => $thisAnswer) {
            if ($answer instanceof CodableValue) {
                $newAnswers[$index] = $thisAnswer;
            } else {
                $newAnswer = new CodableValue();
                $newAnswer->setText((string)$answer);
                
                $newAnswers[$index] = $newAnswer;
            }
        }
        
        $this->answers = $newAnswers;
        
        return $this;
    }
    
    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }
        
        $this->question->setFromThingElement($thingElement->getQuestion(FALSE));
        
        $answers = array();
        $thingAnswers = $thingElement->getAnswer(FALSE);
        
        if (is_array($thingAnswers)) {
            foreach ($thingAnswers as $thingAnswer) {
                $answer = new CodableValue();
                $answer->setVocabularyInterface($this->vocabularyInterface);
                $answer->setFromThingElement($thingAnswer);
                
                $answers[] = $answer;
            }
        }
        
        $this->answers = $answers;
        
        return $thingElement;
    }

    public function updateToThingElement($thingElement)
    {
        if (empty($thingElement))
        {
            return;
        }

        $this->question->setVocabularyInterface($this->vocabularyInterface);
        $this->question->updateToThingElement($thingElement->getQuestion());
        
        $answers = array();
        foreach ($this->answers as $thisAnswer) {
            $answer = new hvCodableValue();
            $thisAnswer->setVocabularyInterface($this->vocabularyInterface);
            $thisAnswer->updateToThingElement($answer);
            
            $answers[] = $answer;
        }
        
        $thingElement->setAnswer($answers);
        
        return $thingElement;
    }
    
    public function __toString()
    {
        return 'Question and Answer';
    }
    
}