<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\medication\Medication as hvMedication;
use com\microsoft\wc\thing\types\GeneralMeasurement as hvGeneralMeasurement;
use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;
use com\microsoft\wc\types\CodedValue;
use com\microsoft\wc\types\CodableValue;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Thing\BaseThing;
use DLS\Healthvault\Proxy\Type\GeneralMeasurement;
use DLS\Healthvault\Proxy\Type\Prescription;

class Medication extends BaseThing
{
    protected $thingType = 'Medication';

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $name;

    /**
     * @var \DLS\Healthvault\Proxy\Type\GeneralMeasurement
     */
    protected $dose;

    /**
     * @var \DLS\Healthvault\Proxy\Type\GeneralMeasurement
     */
    protected $strength;

    /**
     * @var \DLS\Healthvault\Proxy\Type\GeneralMeasurement
     */
    protected $frequency;

    /**
     * @var string
     */
    protected $indication;

    /**
     * @Assert\DateTime
     * @var date
     */
    protected $dateStarted;

    /**
     * @Assert\DateTime
     * @var date
     */
    protected $dateDiscontinued;

    /**
     * @var string
     */
    protected $instructions;

    /**
     * @var \DLS\Healthvault\Proxy\Type\Prescription
     */
    protected $prescription;

    public function __construct(Thing2 $thing = NULL,
                                VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->dose = new GeneralMeasurement('medication-dose-units');

        $this->strength = new GeneralMeasurement('medication-strength-unit');

        $this->frequency = new GeneralMeasurement('medication-dose-units');

        if ($healthvaultVocabulary) {

            $this->dose->setVocabularyInterface($healthvaultVocabulary);

            $this->strength->setVocabularyInterface($healthvaultVocabulary);

            $this->frequency->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }


    public function setHealthvaultVocabulary(VocabularyInterface $healthvaultVocabulary)
    {
        parent::setHealthvaultVocabulary($healthvaultVocabulary);

        $this->dose->setVocabularyInterface($healthvaultVocabulary);

        $this->strength->setVocabularyInterface($healthvaultVocabulary);

        $this->frequency->setVocabularyInterface($healthvaultVocabulary);

    }

    public function setDefaultPrescription(){

        if($this->getThingPayload()->getPrescription()->getPrescribedBy()->getName()->getFull() == "" ){

            $this->getThingPayload()->getPrescription()->getPrescribedBy()->setName('Undefined');

        }

    }

    public function getName(){

        return $this->name;

    }

    public function setName($name){

        $this->name = $name;

        if ($this->thing) {
            $this->setThingName($name);
        }

        return $this;
    }

    public function setThingName($name){
        return $this->setThingCodableValue($this->getThingPayload()->getName(), $name, array());
    }


    public function getDose(){
        return $this->dose;
    }

    public function setDose($dose){


        $this->dose = $dose;

        if($this->thing){

            $this->setThingDose($dose);

        }

        return $this;
    }

    public function setThingDose($dose){

        $payload = $this->getThingPayload();

        $this->strength->updateToThingElement($payload->getDose());
    }


    public function getStrength(){

        return $this->strength;

    }

    public function setStrength($strength){

        $this->strength = $strength;

        if($this->thing){

            $this->setThingStrength($strength);

        }

        return $this;
    }

    public function setThingStrength($strength){

        $payload = $this->getThingPayload();

        $this->strength->updateToThingElement($payload->getStrength());

    }

    public function getFrequency(){

        return $this->frequency;

    }

    public function setFrequency($frequency){

        $this->frequency = $frequency;

        if($this->thing){

            $this->setThingFrequency($frequency);

        }

        return $this;
    }

    public function setThingFrequency($frequency){

        $payload = $this->getThingPayload();

        $this->frequency->updateToThingElement($payload->getFrequency());

    }


    public function getIndication(){

        return $this->indication;

    }

    public function setIndication($indication){

        $this->indication = $indication;

        if ($this->thing) {
            $this->setThingIndication($indication);
        }

        return $this;

    }
    public function setThingIndication($indication){

        $this->getThingPayload()->setIndication($indication);

    }

    public function getDateStarted()
    {
        return $this->dateStarted;
    }

    public function setDateStarted($dateStarted)
    {

        $this->dateStarted = $dateStarted;

        if ($this->thing) {

            $this->setThingDateStarted($dateStarted);
        }

        return $this;
    }

    protected function setThingDateStarted($dateStarted)
    {
        $hvDateStarted = $this->getThingPayload()->getDateStarted();

        $this->setThingApproxDate($hvDateStarted, $dateStarted);
    }

    public function getDateDiscontinued()
    {
        return $this->dateDiscontinued;
    }

    public function setDateDiscontinued($dateDiscontinued)
    {
        $this->dateDiscontinued = $dateDiscontinued;

        if ($this->thing) {

            $this->setThingDateDiscontinued($dateDiscontinued);

        }

        return $this;
    }

    protected function setThingDateDiscontinued($dateDiscontinued)
    {
        $hvDateDiscontinued = $this->getThingPayload()->getDateDiscontinued();

        if($dateDiscontinued){

            $this->setThingApproxDate($hvDateDiscontinued, $dateDiscontinued);

        }else{

            $this->getThingPayload()->setDateDiscontinued(null);

        }
    }

    public function getInstructions(){

        return $this->instructions;

    }

    public function setInstructions($instructions){

        $this->instructions = $instructions;

        if($this->thing){

            $this->setThingInstructions($instructions);

        }

        return $this;

    }

    protected function setThingInstructions($instructions){

        $this->getThingPayload()->getPrescription()->setInstructions($instructions);
    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvMedication::ID);
    }

    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if ( $result === FALSE ) {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->name = $payload->getName()->getText();

        $this->indication = $payload->getIndication()->getText();

        $this->instructions = $payload->getPrescription()->getInstructions()->getText();

        //DOSE

        $dose = $payload->getDose();

        $this->dose->setFromThingElement($dose);

        //STRENGTH

        $strength = $payload->getStrength();

        $this->strength->setFromThingElement($strength);

        //FREQUENCY

        $frequency = $payload->getFrequency();

        $this->frequency->setFromThingElement($frequency);

        //DATES

        $this->dateStarted = $this->getThingApproxDateTime($payload->getDateStarted(),$this->dateStarted);

        $this->dateDiscontinued = $this->getThingApproxDateTime($payload->getDateDiscontinued(),$this->dateDiscontinued);

        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $payload = $this->getThingPayload();

        $this->setDefaultPrescription();

        $this->setThingName($this->name);

        $this->setThingIndication($this->indication);

        $this->setThingInstructions($this->instructions ? $this->instructions : null);

        //DOSE

        $doseValue = $this->dose->getStructured()->getValue();

        if( ! empty ( $doseValue) ){

            $dose = $payload->getDose();

            $this->dose->updateToThingElement($dose);

            $payload->setDose($dose);

        }else{

            $payload->setDose(null);

        }

        //STRENGTH

        $strengthValue = $this->strength->getStructured()->getValue();

        if( ! empty ( $strengthValue ) ){

            $strength = $payload->getStrength();

            $this->strength->updateToThingElement($strength);

            $payload->setStrength($strength);

        }else{

            $payload->setStrength(null);

        }

        //FREQUENCY

        $frequencyValue = $this->frequency;

        if($frequencyValue->getDisplay()){

            $frequency = $payload->getFrequency();

            $this->frequency->updateToThingElement($frequency);

            $frequency->setDisplay($frequencyValue->getDisplay());

            $payload->setFrequency($frequency);

        }else{

            $payload->setFrequency(null);

        }

        //DATES

        $this->setThingDateStarted($this->dateStarted);

        $this->setThingDateDiscontinued( $this->dateDiscontinued ? $this->dateDiscontinued : null);

        return $thing;
    }


    protected function getNewDataXmlContent() {

        return new hvMedication();

    }

}