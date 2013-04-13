<?php
namespace DLS\Healthvault\Proxy\Thing;
use DLS\Healthvault\Proxy\Type\LightWeightValue;

use Symfony\Component\Validator\Constraints as Assert;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Blob\BlobStoreFactory;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\dietary_intake_daily\DietaryIntakeDaily as hvDietaryIntakeDaily;

class DietaryIntakeDaily extends DayWhenThing
{
    protected $thingType = 'DietaryIntakeDaily';

    /**
     * The total number of calories
     * 
     * @Assert\Range(min=0)
     * 
     * @var integer
     */
    protected $calories;

    /**
     * The total amount of fat
     * 
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $totalFat;

    /**
     * The total amount of saturated fat
     * 
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $saturatedFat;

    /**
     * The total amount of trans fat
     * 
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $transFat;

    /**
     * Tht total amount of protein
     * 
     * @var DLS\Healthvault\Proxy\Type\LightWeighValue
     */
    protected $protein;

    /**
     * The total amount of carbohydrates
     *
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $totalCarbohydrates;

    /**
     * The total amount of dietary fiber
     *
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $dietaryFiber;

    /**
     * The total amount of sugars        

     *
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $sugars;

    /**
     * The total amount of sodium
     *
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $sodium;

    /**
     * The total amount of cholesterol
     *
     * @var DLS\Healthvault\Proxy\Type\LightWeightValue
     */
    protected $cholesterol;

    public function __construct(Thing2 $thing = NULL,
            VocabularyInterface $healthvaultVocabulary = NULL,
            BlobStoreFactory $factory = NULL)
    {

        $this->totalFat = new LightWeightValue();
        $this->saturatedFat = new LightWeightValue();
        $this->transFat = new LightWeightValue();
        $this->protein = new LightWeightValue();
        $this->totalCarbohydrates = new LightWeightValue();
        $this->dietaryFiber = new LightWeightValue();
        $this->sugars = new LightWeightValue();
        $this->sodium = new LightWeightValue();
        $this->cholesterol = new LightWeightValue();

        parent::__construct($thing, $healthvaultVocabulary, $factory);
    }
    

    public function getCalories()
    {
        return $this->calories;
    }

    public function setCalories($calories)
    {
        $this->calories = $calories;
        
        return $this;
    }

    public function getTotalFat()
    {
        return $this->totalFat;
    }

    public function setTotalFat(LightWeightValue $totalFat)
    {
        $this->totalFat = $totalFat;
        
        return $this;
    }

    public function getSaturatedFat()
    {
        return $this->saturatedFat;
    }

    public function setSaturatedFat(LightWeightValue $saturatedFat)
    {
        $this->saturatedFat = $saturatedFat;
        
        return $this;
    }

    public function getTransFat()
    {
        return $this->transFat;
    }

    public function setTransFat(LightWeightValue $transFat)
    {
        $this->transFat = $transFat;
        
        return $this;
    }

    public function getProtein()
    {
        return $this->protein;
    }

    public function setProtein($protein)
    {
        $this->protein = $protein;
        
        return $this;
    }

    public function getTotalCarbohydrates()
    {
        return $this->totalCarbohydrates;
    }

    public function setTotalCarbohydrates(LightWeightValue $totalCarbohydrates)
    {
        $this->totalCarbohydrates = $totalCarbohydrates;
        
        return $this;
    }

    public function getDietaryFiber()
    {
        return $this->dietaryFiber;
    }

    public function setDietaryFiber(LightWeightValue $dietaryFiber)
    {
        $this->dietaryFiber = $dietaryFiber;
        
        return $this;
    }

    public function getSugars()
    {
        return $this->sugars;
    }

    public function setSugars(LightWeightValue $sugars)
    {
        $this->sugars = $sugars;
        
        return $this;
    }

    public function getSodium()
    {
        return $this->sodium;
    }

    public function setSodium(LightWeightValue $sodium)
    {
        $this->sodium = $sodium;
        
        return $this;
    }

    public function getCholesterol()
    {
        return $this->cholesterol;
    }

    public function setCholesterol(LightWeightValue $cholesterol)
    {
        $this->cholesterol = $cholesterol;
        
        return $this;
    }

    public function setThing(Thing2 $thing) {
        $thing = parent::setThing($thing);
        
        if ( ! $thing ) {
            return $thing;
        }
        
        $payload = $this->getThingPayload();
        
        $this->calories = $payload->getCalories()->getValue();
        $this->totalFat->setFromThingElement($payload->getTotalFat());
        $this->saturatedFat->setFromThingElement($payload->getSaturatedFat());
        $this->transFat->setFromThingElement($payload->getTransFat());
        $this->protein->setFromThingElement($payload->getProtein());
        $this->totalCarbohydrates->setFromThingElement($payload->getTotalCarbohydrates());
        $this->dietaryFiber->setFromThingElement($payload->getDietaryFiber());
        $this->sugars->setFromThingElement($payload->getSugars());
        $this->sodium->setFromThingElement($payload->getSodium());
        $this->cholesterol->setFromThingElement($payload->getCholesterol());
        
        return $thing;
    }
    
    public function getThing(Thing2 $thing = NULL) {
        $thing = parent::getThing($thing);
        
        $payload = $this->getThingPayload();
        
        $payload->getCalories()->setValue($this->calories);
        if ($this->totalFat->isEmpty()) {
            $payload->setTotalFat(FALSE);
        } else {
            $this->totalFat->updateToThingElement($payload->getTotalFat());
        }
        if ($this->saturatedFat->isEmpty()) {
            $payload->setSaturatedFat(FALSE);
        } else {
            $this->saturatedFat->updateToThingElement($payload->getSaturatedFat());
        }
        if ($this->transFat->isEmpty()) {
            $payload->setTransFat(FALSE);
        } else {
            $this->transFat->updateToThingElement($payload->getTransFat());
        }
        if ($this->protein->isEmpty()) {
            $payload->setProtein(FALSE);
        } else {
            $this->protein->updateToThingElement($payload->getProtein());
        }
        if ($this->totalCarbohydrates->isEmpty()) {
            $payload->setTotalCarbohydrates(FALSE);
        } else {
            $this->totalCarbohydrates->updateToThingElement($payload->getTotalCarbohydrates());
        }
        if ($this->dietaryFiber->isEmpty()) {
            $payload->setDietaryFiber(FALSE);
        } else {
            $this->dietaryFiber->updateToThingElement($payload->getDietaryFiber());
        }
        if ($this->sugars->isEmpty()) {
            $payload->setSugars(FALSE);
        } else {
            $this->sugars->updateToThingElement($payload->getSugars());
        }
        if ($this->sodium->isEmpty()) {
            $payload->setSodium(FALSE);
        } else {
            $this->sodium->updateToThingElement($payload->getSodium());
        }
        if ($this->cholesterol->isEmpty()) {
            $payload->setCholesterol(FALSE);
        } else {
            $this->cholesterol->updateToThingElement($payload->getCholesterol());
        }    
        return $thing;
    }
    
    public static function reallySupports(Thing2 $thing) {
        return ($thing->getTypeId()->getValue() == hvDietaryIntakeDaily::ID);
    }
    
    protected function getNewDataXmlContent() {
        return new hvDietaryIntakeDaily();
    }
    
    public static function getDisplayFields() {
        return array(
            'when' => 'Date',
            'calories' => 'Energy',
            'totalFat' => 'Fat',
            'sugars' => 'Sugar',
            'cholesterol' => 'Cholesterol',
        );
    }
}
