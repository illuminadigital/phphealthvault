<?php

namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\inhaler_use\AsthmaInhalerUse as hvAsthmaInhalerUse;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Utilities\VocabularyInterface;

use Symfony\Component\Validator\Constraints as Assert;

class HeartRate extends WhenThing
{
    protected $thingType = 'Heart Rate';

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $drug;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $strength;

    /**
     * @Assert\Type("integer")
     *
     * @var integer
     */
    protected $doseCount;

    /**
     * @var string
     */
    protected $deviceId;

    /**
     * @var \DLS\Healthvault\Proxy\Type\CodableValue
     */
    protected $dosePurpose;




}