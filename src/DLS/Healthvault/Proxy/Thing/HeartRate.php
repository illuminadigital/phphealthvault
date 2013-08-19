<?php

namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\heart_rate\HeartRate;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Utilities\VocabularyInterface;

use Symfony\Component\Validator\Constraints as Assert;

class HeartRate extends WhenThing
{
    protected $thingType = 'Heart Rate';

    /**
     * @Assert\Type("integer")
     * @Assert\GreaterThan( value = -1 )
     * @Assert\NotBlank()
     *
     * @XmlElement	(type="\com\microsoft\wc\thing\types\NonNegativeInt", name="value")
     */
    protected $value;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $measurementMethod;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $measurementConditions;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $measurementFlags;

}