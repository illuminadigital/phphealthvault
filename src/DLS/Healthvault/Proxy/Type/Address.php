<?php
namespace DLS\Healthvault\Proxy\Type;

class Address extends BaseType
{

    protected $description;

    protected $isPrimary;

    protected $street;

    protected $city;

    protected $state;

    protected $postcode;

    protected $country;

    protected $county;

    public function getDescription(){

        return $this->description;

    }

    public function setDescription($description){

        $this->description = $description;

        return $this;

    }

    public function getIsPrimary(){

        return $this->isPrimary;

    }

    public function setIsPrimary($isPrimary){

        $this->isPrimary = $isPrimary;

        return $this;

    }

    public function getStreet(){

        return $this->street;

    }

    public function setStreet($street){

        $this->street = $street;

        return $this;

    }

    public function getCity(){

        return $this->city;

    }

    public function setCity($city){

        $this->city = $city;

        return $this;

    }

    public function getState(){

        return $this->state;

    }

    public function setState($state){

        $this->state = $state;

        return $this;

    }

    public function getPostcode(){

        return $this->postcode;

    }

    public function setPostcode($postcode){

        $this->postcode = $postcode;

        return $this;

    }

    public function getCountry(){

        return $this->country;

    }

    public function setCountry($country){

        $this->country = $country;

        return $this;

    }

    public function getCounty(){

        return $this->county;

    }

    public function setCounty($county){

        $this->county = $county;

        return $this;
    }

    public function setFromThingElement($thingElement){

        if (empty($thingElement)) {
            return;
        }

        $this->description = $thingElement->getDescription(FALSE);

        $this->isPrimary = $thingElement->getIsPrimary(FALSE);

        $this->street = $thingElement->getStreet(FALSE);

        $this->city = $thingElement->getCity(FALSE);

        $this->state = $thingElement->getState(FALSE);

        $this->postcode = $thingElement->getPostcode(FALSE);

        $this->country = $thingElement->getCountry(FALSE);

        $this->county = $thingElement->getCounty(FALSE);

    }

    public function updateToThingElement($thingElement){

        $thingElement->setDescription($this->description);

        $thingElement->setIsPrimary($this->isPrimary);

        $thingElement->setStreet($this->street);

        $thingElement->setCity($this->city);

        $thingElement->setState($this->state);

        $thingElement->setPostcode($this->postcode);

        $thingElement->setCountry($this->country);

        $thingElement->setCounty($this->county);

    }

    public function isEmpty()
    {
        return empty($this->street) && empty($this->city) && empty($this->county) && empty($this->postcode);
    }

    public function __toString(){

        $address = '';

        if(isset($this->description)){
            $address.=$this->description.'. ';
        }

        if(isset($this->street)){
            $address.=implode(" ",$this->street).'. ';
        }

        $region = array();

        if(isset($this->city)){
            $region[]=$this->city;
        }

        if(isset($this->county)){
            $region[]=$this->county;
        }

        $regionStr = implode(' ,',$region);

        if(strlen($regionStr)>0){
            $address.=$regionStr.'. ';
        }

        if(isset($this->postcode)){
            $address.=$this->postcode.'. ';
        }

        $area = array();

        if(isset($this->state)){
            $area[]=$this->state;
        }

        if(isset($this->country)){
            $area[]=$this->country;
        }

        $areaStr = implode(' ,',$area);

        if(strlen($regionStr)>0){
            $address.=$areaStr.'.';
        }

        return $address;
    }
}