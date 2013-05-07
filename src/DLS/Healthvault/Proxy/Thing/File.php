<?php
namespace DLS\Healthvault\Proxy\Thing;
use DLS\Healthvault\Proxy\Thing\BaseThing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\file\File as hvFile;

use DLS\Healthvault\Proxy\Type\CodableValue;
use DLS\Healthvault\Blob\BlobStoreFactory;
use DLS\Healthvault\Utilities\VocabularyInterface;

class File extends BaseThing
{
    protected $size;

    /**
     * @var string
     */
    protected $thingType = 'File';

    protected $name;

    protected $contentType;

    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL, BlobStoreFactory $factory = NULL)
    {
        $this->contentType = new CodableValue();
        
        parent::__construct($thing, $healthvaultVocabulary, $factory);
    }
    
    public function setThing(Thing2 $thing)
    {
        $result = parent::setThing($thing);

        if (!$result) {
            return $result;
        }

        $payload = $this->getThingPayload();

        $this->name = $this->getElementValue($payload->getName(FALSE));
        $this->contentType->setFromThingElement($payload->getContentType(FALSE));
        $this->size = $payload->getSize(FALSE);
        
        return $this;
    }

    public function getThing(Thing2 $thing = NULL)
    {
        $thing = parent::getThing($thing);

        $this->setThingName($this->name);

        $this->setThingContentType($this->contentType);
        
        $this->setThingSize($this->size);
        
        return $thing;
    }

    public function setSize($size) {
        $this->size = $size;
        
        if ($this->thing) {
            $this->setThingSize($size);
        }
        
        return $this;
    }
    
    public function getSize()
    {
        return $this->size;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        if ($this->thing) {
            $this->setThingName($name);
        }

        return $this;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        
        if ($this->thing) {
            $this->setThingContentType($this->contentType);
        }
        
        return $this;
    }
    
    public function setThingContentType($contentType)
    {
        $payload = $this->getThingPayload();
        $contentType->updateToThingElement($payload->getContentType());
        
        return $this;
    }

    public function setThingName($name)
    {
        $payload = $this->getThingPayload();
        
        if ($name) {
            $payload->getName()->setValue($name);
        } else {
            $payload->setName(NULL);           
        }

        return $this;
    }
    
    public static function reallySupports(Thing2 $thing)
    {
        return ($thing->getTypeId()->getValue() == hvFile::ID);
    }

    public function getNewDataXmlContent()
    {
        return new hvFile();
    }

    public function getThingSize()
    {
        $payload = $this->getThingPayload();

        return $payload->getSize(FALSE);
    }
    
    public function setThingSize($size)
    {
        $payload = $this->getThingPayload();
        
        $payload->setSize($size);
        
        return $this;
    }
}
