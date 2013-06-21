<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\emotion\Emotion as hvEmotion;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

class Emotion extends WhenThing
{

    /**
     * @Assert\Type("integer")
     * @Assert\Range(min=1, max=5)
     *
     * @var integer
     */
    protected $mood;

    /**
     * @Assert\Type("integer")
     * @Assert\Range(min=1, max=5)
     *
     * @var integer
     */
    protected $stress;

    /**
     * @Assert\Type("integer")
     * @Assert\Range(min=1, max=5)
     *
     * @var integer
     */
    protected $wellbeing;

    protected $thingType = 'Emotional State';


    public function getMood(){
        return $this->mood;
    }
    public function setMood($mood){

        $this->mood = $mood;

        if ($this->thing) {
            $this->setThingMood($mood);
        }

        return $this;

    }
    protected function setThingMood($mood){

        $payload = $this->getThingPayload();

        if ( empty($mood) || ! ($mood = (int) $mood) ) {
            $payload->setMood(NULL);
        } else {
            $payload->getMood()->setValue($mood);
        }

        return $this;
    }

    public function getStress(){
        return $this->stress;
    }
    public function setStress($stress){
        $this->stress = $stress;

        if($this->thing){
            $this->setThingStress($stress);
        }

        return $this;
    }
    public function setThingStress($stress){

        $payload = $this->getThingPayload();

        if ( empty($stress) || ! ($stress = (int) $stress) ) {
            $payload->setStress(NULL);
        } else {
            $payload->getStress()->setValue($stress);
        }

        return $this;

    }

    public function getWellbeing(){
        return $this->wellbeing;
    }

    public function setWellbeing($wellbeing){
        $this->wellbeing = $wellbeing;

        if($this->thing){

            $this->setThingWellbeing($wellbeing);

        }

        return $this;
    }
    public function setThingWellbeing($wellbeing){

        $payload = $this->getThingPayload();

        if ( empty($wellbeing) || ! ($wellbeing = (int) $wellbeing) ) {
            $payload->setWellbeing(NULL);
        } else {
            $payload->getWellbeing()->setValue($wellbeing);
        }

        return $this;

    }



    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( $result === FALSE ) {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->mood = $payload->getMood()->getValue();
        $this->stress = $payload->getStress()->getValue();
        $this->wellbeing = $payload->getWellbeing()->getValue();

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);
        $this->setThingMood($this->mood);
        $this->setThingStress($this->stress);
        $this->setThingWellbeing($this->wellbeing);
        return $thing;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return (strtolower($thing->getTypeId()->getValue()) == strtolower(hvEmotion::ID));

    }

    protected function getNewDataXmlContent() {
        return new hvEmotion();
    }

    public static function getMoodLabels(){
        return array(
            1=>'Depressed',
            2=>'Sad',
            3=>'Neutral',
            4=>'Happy',
            5=>'Elated'
        );
    }
    public static function getStressLabels(){
        return array(
            1=>'Very Low',
            2=>'Low',
            3=>'Moderate',
            4=>'High',
            5=>'Very High'
        );
    }
    public static function getWellbeingLabels(){
        return array(
            1=>'Sick',
            2=>'Impaired',
            3=>'Able',
            4=>'Healthy',
            5=>'Vigorous'
        );
    }

}