<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\personal_image\PersonalImage as hvPersonalImage;
use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;
use com\microsoft\wc\types\CodedValue;
use com\microsoft\wc\types\CodableValue;

class PersonalImage extends BaseThing
{
    protected $thingType = 'Personal Image';


    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvPersonalImage::ID);
    }

    public function setThing(Thing2 $hvPersonalImage)
    {

        $result = parent::setThing($hvPersonalImage);

        if ( ! $result )
        {
            return $result;
        }

        $this->hvPersonal = $hvPersonalImage;

        $payloadArea = $this->getThingPayloadArea();

        $blobStore = $this->getBlobs();

        $payload = $this->getThingPayload();

        return $this;
    }

    public function getImageLink(){
        if($this->thing->getBlobPayload()->getBlob()){
            return current($this->thing->getBlobPayload()->getBlob())->getBlobRefUrl();
        }
        return false;
    }

    public function getThing(Thing2 $hvPersonalImage = NULL)

    {
        $hvPersonalImage = parent::getThing($hvPersonalImage);

        return $hvPersonalImage;
    }

    protected function getNewDataXmlContent() {
        return new hvPersonal();
    }
}