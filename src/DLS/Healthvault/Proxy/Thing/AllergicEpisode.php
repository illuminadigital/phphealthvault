<?php

namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;

use DLS\Healthvault\Utilities\VocabularyInterface;

use DLS\Healthvault\Proxy\Type\CodableValue;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\allergic_episode\AllergicEpisode as hvAllergicEpisode;

class AllergicEpisode extends BaseThing
{
    protected $thingType = 'Allergic Episode';

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $name;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $reaction;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $treatment;


    /**
     * @param \com\microsoft\wc\thing\Thing2 $thing
     * @param \DLS\Healthvault\Utilities\VocabularyInterface $healthvaultVocabulary
     */
    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {

        $this->name = new CodableValue();

        $this->reaction = new CodableValue('reactions');

        $this->treatment = new CodableValue();


        if ($healthvaultVocabulary)
        {

            $this->reaction->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);

    }

    /**
     * @param \DLS\Healthvault\Utilities\VocabularyInterface $healthvaultVocabulary
     */

    public function setHealthvaultVocabulary(VocabularyInterface $healthvaultVocabulary){

        $this->reaction->setVocabularyInterface($healthvaultVocabulary);

        parent::setHealthvaultVocabulary($healthvaultVocabulary);

    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $name
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setName($name)
    {
        $this->name = $name;

        if ($this->thing) {

            $this->setThingName($name);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $name
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingName($name)
    {
        $payload = $this->getThingPayload();

        $this->name->updateToThingElement($payload->getName());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $reaction
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setReaction($reaction)
    {
        $this->reaction = $reaction;

        if ($this->thing) {

            $this->setThingReaction($reaction);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $reaction
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingReaction($reaction)
    {
        $payload = $this->getThingPayload();

        $this->reaction->updateToThingElement($payload->getReaction());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $treatment
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setTreatment($treatment)
    {
        $this->treatment = $treatment;

        if ($this->thing) {

            $this->setThingTreatment($treatment);

        }

        return $this;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $treatment
     * @return \DLS\Healthvault\Proxy\Thing\Allergy
     */
    public function setThingTreatment($treatment)
    {
        $payload = $this->getThingPayload();

        $this->treatment->updateToThingElement($payload->getTreatment());

        return $this;
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \DLS\Healthvault\Proxy\Thing\AsthmaInhalerUse
     */
    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->name->setFromThingElement($payload->getName(FALSE));

        $this->reaction->setFromThingElement($payload->getReaction(FALSE));

        $this->treatment->setFromThingElement($payload->getTreatment(FALSE));

        return $this;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return \com\microsoft\wc\thing\Thing2
     */
    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingName($this->name);

        $this->setThingReaction($this->reaction);

        $this->setThingTreatment($this->treatment);

        return $thing;
    }

    /**
     * @param \com\microsoft\wc\thing\Thing2
     * @return bool
     */
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvAllergicEpisode::ID);
    }

    /**
     * @return \com\microsoft\wc\thing\allergy\Allergy
     */
    protected function getNewDataXmlContent()
    {
        return new hvAllergicEpisode();
    }

    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'name' => 'Name',
            'reaction' => 'Reaction',
            'treatment' => 'Treatment'
        );
    }

}