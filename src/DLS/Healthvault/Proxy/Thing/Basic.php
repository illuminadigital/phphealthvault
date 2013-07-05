<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Proxy\Type\CodableValue;

use com\microsoft\wc\thing\basic\Basic as hvBasic;
use com\microsoft\wc\thing\Thing2;


class Basic extends BaseThing
{
    protected $thingType = 'Basic';

    /**
     * @var string
     */
    protected $gender;

    /**
     * @Assert\NotBlank()
     *
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */

    protected $country;

    /**
     * @Assert\NotBlank()
     * @var string
     */
    protected $postcode;

    /**
     * @var string
     */
    protected $city;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL) {

        $this->country = new CodableValue();
        $this->country->addVocabulary('iso3166', 'iso');

        if ($healthvaultVocabulary) {

            $this->country->setVocabularyInterface($healthvaultVocabulary);

        }

        parent::__construct($thing, $healthvaultVocabulary);
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;

        if($this->thing){

            $this->setThingCity($city);

        }

        return this;
    }

    public function setThingCity($city){
        $payload = $this->getThingPayload();

        $this->city->updateToThingElement($payload->getCity());
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param \DLS\Healthvault\Proxy\Type\CodableValue $country
     */
    public function setCountry($country)
    {
        $this->country = $country;

        if($this->thing){

            $this->setThingCountry($country);

        }

        return this;
    }


    public function setThingCountry($country){
        $payload = $this->getThingPayload();

        $this->country->updateToThingElement($payload->getCountry());
    }

    /**
     * @return \DLS\Healthvault\Proxy\Type\CodableValue
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        if($this->thing){

            $this->setThingGender($gender);

        }

        return this;
    }

    public function setThingGender($gender){
        $payload = $this->getThingPayload();

        $this->gender->updateToThingElement($payload->getGender());
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $postcode
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        if($this->thing){

            $this->setThingPostcode($postcode);

        }

        return this;
    }

    public function setThingPostcode($postcode){
        $payload = $this->getThingPayload();

        $this->postcode->updateToThingElement($payload->getPostcode());
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvBasic::ID);
    }

    public function setThing(Thing2 $hvBasic)
    {
        $result = parent::setThing($hvBasic);

        if ( ! $result )
        {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->gender = $payload->getGender();
        $this->postcode = $payload->getPostcode();
        $this->city = $payload->getCity();
        $this->country = $payload->getCountry();

        return $this;
    }

    public function getThing(Thing2 $hvBasic = NULL)
    {
        $hvBasic = parent::getThing($hvBasic);

        $this->setThingGender($this->gender);
        $this->setThingCity($this->city);
        $this->setThingPostcode($this->postcode);
        $this->setThingCountry($this->country);

        return $hvBasic;
    }


    protected function getNewDataXmlContent() {
        return new hvBasic();
    }

}