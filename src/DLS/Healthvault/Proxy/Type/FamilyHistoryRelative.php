<?php
namespace DLS\Healthvault\Proxy\Type;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Proxy\Type\Person;
use DLS\Healthvault\Utilities\DateTimeUtils;
use DLS\Healthvault\Utilities\VocabularyInterface;


class FamilyHistoryRelative extends VocabularyType
{

    /**
     * The relationship of this person to the record owner.
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    private $relationship;

    /**
     * The name and other information about the relative.
     *
     * @var \DLS\Healthvault\Proxy\Type\Person
     */

    private $relativeName;

    /**
     * The date of birth for the relative.
     *
     * @Assert\DateTime()
     *
     * @var \DateTime
     */
    private $dateOfBirth;

    /**
     * The date of death for the relative.
     *
     * @Assert\DateTime()
     *
     * @var \DateTime
     */
    private $dateOfDeath;

    /**
     * The region of origin the relative.
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    private $regionOfOrigin;


    public function __construct($thingElement = NULL,VocabularyInterface $vocabulary = NULL)
    {

        $this->relativeName = new Person();

        $this->relationship = new CodableValue('personal-relationship');

        $this->regionOfOrigin = new CodableValue('family-history-region-of-origin');

        if ($vocabulary){

            $this->relationship->setVocabularyInterface($vocabulary);

            $this->regionOfOrigin->setVocabularyInterface($vocabulary);

        }

        parent::__construct($thingElement);
    }

    public function getRelationship(){
        return $this->relationship;
    }
    public function setRelationship($relationship){
        $this->relationship = $relationship;
        return $this;
    }
    public function getRelativeName(){
        return $this->relativeName;
    }
    public function setRelativeName($relativeName){
        $this->relativeName = $relativeName;
        return $this;
    }
    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }
    public function setDateOfBirth($dateOfBirth){
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    public function getDateOfDeath(){
        return $this->dateOfDeath;
    }
    public function setDateOfDeath($dateOfDeath){
        $this->dateOfDeath = $dateOfDeath;
        return $this;
    }
    public function getRegionOfOrigin(){
        return $this->regionOfOrigin;
    }
    public function setRegionOfOrigin($regionOfOrigin){
        $this->regionOfOrigin = $regionOfOrigin;
        return $this;
    }

    public function setFromThingElement($thingElement)
    {
        if (empty($thingElement)) {
            return;
        }

        //Get relationship
        $this->relationship->setVocabularyInterface($this->vocabularyInterface);
        $this->relationship->setFromThingElement($thingElement->getRelationship(FALSE));


        //Get relative name
        $this->relativeName->setFromThingElement($thingElement->getRelativeName(FALSE));

        //Get date of birth
        $this->dateOfBirth = DateTimeUtils::getThingApproxDate($thingElement->getDateOfBirth);

        //
        $this->dateOfDeath = DateTimeUtils::getThingApproxDate($thingElement->getDateOfDeath);

        $this->regionOfOrigin->setVocabularyInterface($this->vocabularyInterface);

        $this->regionOfOrigin->setFromThingElement($thingElement->getRegionOfOrigin(FALSE));
    }

    public function updateToThingElement($thingElement)
    {
        $this->relationship->setVocabularyInterface($this->vocabularyInterface);

        if ( ! $this->relationship->isEmpty() ) {
            $this->relationship->updateToThingElement($thingElement->getRelationship());
        } else {
            $thingElement->getRelationship(NULL);
        }

        $this->relativeName->setVocabularyInterface($this->vocabularyInterface);

        if ( ! $this->relativeName->isEmpty() ) {
            $this->relativeName->updateToThingElement($thingElement->getRelativeName());
        } else {
            $thingElement->getRelativeName(NULL);
        }

        $this->dateOfBirth->setVocabularyInterface($this->vocabularyInterface);

        if ( ! $this->dateOfBirth->isEmpty() ) {
            $this->dateOfBirth->updateToThingElement($thingElement->getDateOfBirth());
        } else {
            $thingElement->getDateOfBirth(NULL);
        }


        $this->dateOfDeath->setVocabularyInterface($this->vocabularyInterface);

        if ( ! $this->dateOfDeath->isEmpty() ) {
            $this->dateOfDeath->updateToThingElement($thingElement->getDateOfDeath());
        } else {
            $thingElement->getDateOfDeath(NULL);
        }

        $this->regionOfOrigin->setVocabularyInterface($this->vocabularyInterface);

        if ( ! $this->regionOfOrigin->isEmpty() ) {
            $this->regionOfOrigin->updateToThingElement($thingElement->getRegionOfOrigin());
        } else {
            $thingElement->getRegionOfOrigin(NULL);
        }
    }

    public function __toString(){

        return $this->getRelationship()->getText();
    }

}