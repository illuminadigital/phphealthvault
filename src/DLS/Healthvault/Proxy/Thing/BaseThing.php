<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;

use com\microsoft\wc\dates\DateTime;
use com\microsoft\wc\dates\ApproxDateTime;
use com\microsoft\wc\dates\Date;
use com\microsoft\wc\types\CodableValue;

use DLS\Healthvault\Utilities\DateTimeUtils;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Blob\BlobStoreFactory;

use DLS\Healthvault\Blob\Blob;

use DLS\Healthvault\Proxy\Type\ExtensionFactory;
use DLS\Healthvault\Proxy\Type\Extension;
use com\microsoft\wc\thing\Extension as hvExtension;

use Symfony\Component\Validator\Constraints as Assert;

abstract class BaseThing
{
    /**
     * @var \com\microsoft\wc\thing\thing\Thing2
     */
    protected $thing;
    
    /**
     * @var \DLS\Healthvault\Utilities\VocabularyInterface
     */
    protected $healthvaultVocabulary;
    
    /**
     * @var \DLS\Healthvault\Blob\BlobStoreFactory 
     */
    protected $blobStoreFactory;
    
    /**
     * @var string
     */
    protected $notes;
    
    /**
     * @Assert\NotBlank
     * @var string;
     */
    protected $thingType;
    
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $version;

    /**
     * Extensions location
     * 
     * @var array
     */
    protected $extensions = array();
    
    public function __construct(Thing2 $thing = NULL, VocabularyInterface $healthvaultVocabulary = NULL, BlobStoreFactory $factory = NULL)
    {
        if ($thing) {
            $this->setThing($thing);
        }
    
        if ($healthvaultVocabulary) {
            $this->setHealthvaultVocabulary($healthvaultVocabulary);
        }
        
        if ($factory) {
            $this->blobStoreFactory = $factory;
        }
    }
    
    public function getNotes()
    {
        return $this->notes;
    }
    
    public function setNotes($notes)
    {
        $this->notes = $notes;
        
        if ($this->thing) {
            $this->setThingNotes($notes);
        }
        
        return $this;
    }
    
    /**
     * @return the name
     */
    public function getThingType()
    {
        return $this->thingType;
    }
    
    /**
     * @return the Thing
     */
    public function getThing(Thing2 $thing = NULL)
    {
        if (empty($thing) && empty($this->thing))
        {
            $thing = new Thing2();
        }
        
        if ( ! empty($thing) )
        {
            $this->thing = $thing;
        }
        
        if ( ! empty($this->id) ) {
            $this->setThingId($this->id);
        }
        
        if ( ! empty ($this->version) ) {
            $this->setThingVersion($this->version);
        }
        
        $this->setThingNotes($this->notes);
        
        $this->setThingExtensions($this->extensions);
        
        return $this->thing;
    }
    
    /**
     * @param  $thing
     */
    public function setThing(Thing2 $thing)
    {
        if ( ! self::supports($thing) ) {
            return FALSE;
        }
        
        $this->thing = $thing;
        
        $this->notes = $this->getThingNotes();
        $this->version = $this->getThingVersion();
        $this->id = $this->getThingId();
        
        $callable = array($this, 'setThingPreExtension');
        if (is_callable($callable)) {
            call_user_func($callable, $thing);
        }
        
        $this->extensions = $this->getThingExtensions();
    
        return $this;
    }
    
    protected function getThingNotes()
    {
        $payloadArea = $this->getThingPayloadArea();
        
        return $payloadArea->getCommon()->getNote();
    }

    protected function setThingNotes($notes)
    {
        $payloadArea = $this->getThingPayloadArea();
        
        $hvCommon = $payloadArea->getCommon();
        $hvCommon->setNote($notes);
        
        return $this;
    }
    
    protected function getThingVersion()
    {
        $thingKey = $this->thing->getThingId();

        $stamp = $thingKey->getVersionStamp();
        
        if (is_object($stamp)) {
            return $stamp->getValue();
        } else {
            return $stamp;
        }
    }
    
    protected function setThingVersion($version)
    {
        $thingKey = $this->thing->getThingId(); 
        $thingKey->setVersionStamp($version);
        
        return $this;
    }

    protected function getThingExtensions()
    {
        $payloadArea = $this->getThingPayloadArea();
        $hvExtensions = $payloadArea->getCommon()->getExtension();
        
        $extensions = array();
        
        if ( ! is_array($hvExtensions )) {
            return $extensions;
        }
        
        $extensionFactory = ExtensionFactory::getExtensionFactory();
        
        foreach ($hvExtensions as $thisHvExtension) {
            $extensions[] = $extensionFactory->getExtension($thisHvExtension->getSource(), $thisHvExtension, $this);
        }
        
        return $extensions;
    }
    
    protected function setThingExtensions($extensions)
    {
        $hvExtensions = array();
        
        foreach ($extensions as $thisExtension) {
            $hvExtension = new hvExtension();
            $thisExtension->updateToThingElement($hvExtension);
            
            $hvExtensions[] = $hvExtension;
        }
        
        $payloadArea = $this->getThingPayloadArea();
        $payloadArea->getCommon()->setExtension($hvExtensions);
    }

    protected function getThingId()
    {
        $thingKey = $this->thing->getThingId(); 
        return $thingKey->getValue();
    }
    
    protected function setThingId($id)
    {
        $thingKey = $this->thing->getThingId(); 
        $thingKey->setValue($id);
        
        return $this;
    }

    /**
     * @return the HealthvaultVocabulary
     */
    public function getHealthvaultVocabulary()
    {
        return $this->healthvaultVocabulary;
    }
    
    /**
     * @param  $healthvaultVocabulary
     */
    public function setBlobStoreFactory(BlobStoreFactory $factory)
    {
        $this->blobStoreFactory = $factory;
    
        return $this;
    }
    
    /**
     * @return the HealthvaultVocabulary
     */
    public function getBlobStoreFactory()
    {
        return $this->blobStoreFactory;
    }
    
    /**
     * @param  $healthvaultVocabulary
     */
    public function setHealthvaultVocabulary(VocabularyInterface $healthvaultVocabulary)
    {
        $this->healthvaultVocabulary = $healthvaultVocabulary;
    
        return $this;
    }
    
    public static function supports(Thing2 $thing) {
        $calledClass = get_called_class();
        
        if (is_callable(array($calledClass, 'reallySupports'))) {
            return call_user_func(array($calledClass, 'reallySupports'), $thing);
        }
        
        return FALSE;
    }
    
    public function getVersion() {
        return $this->version;
    }
    
    public function setVersion($version) {
        $this->version = $version;
        
        if ( $this->thing )
        {
            $this->thing->getThingId()->setVersionStamp($version);
        }
    
        return $this;
    }
    
    public function getId()
    {
        return $this->id;
    }

    // No setId() by default
    
    protected function getThingPayload()
    {
        $payloadWrapper = $this->getThingPayloadArea();
        
        $payloadContentArr = $payloadWrapper->getAny();
        $payloadContent = array_shift($payloadContentArr);
        
        return $payloadContent;
    }
    
    protected function getThingPayloadArea()
    {
        $data = $this->thing->getDataXml();
        
        if ( ! empty($data) )
        {
            $payloadWrapper = array_shift($data);
        }
        else
        {
            $payloadWrapper = new DataXml();
            $payloadWrapper->addAny($this->getNewDataXmlContent());

            $this->thing->addDataXml($payloadWrapper);
        }
        
        return $payloadWrapper;
    }

    abstract protected function getNewDataXmlContent();
    
    protected function setThingCodableValue(CodableValue $hvCodable, $value, $vocabularies = array())
    {
        $code = FALSE;
        
        if ( ! empty($value) && $this->healthvaultVocabulary) {
            // Try to lookup the code
        
            foreach ($vocabularies as $vocabulary) {
                if (is_array($vocabulary)) {
                    $vocabularyName = array_shift($vocabulary);
                    $vocabularyFamily = (empty($vocabulary) ? 'wc' : array_shift($vocabulary));
                } else {
                    $vocabularyName = (string) $vocabulary;
                    $vocabularyFamily = 'wc';
                }
        
                $code = $this->healthvaultVocabulary->getEntry($value, $vocabularyName, $vocabularyFamily);
        
                if ($code) {
                    break;
                }
            }
        }
        
        if ( isset($value)) {
            $hvCodable->setText($value);
        } else {
            $hvCodable->setText('');
        }
        
        if ($code) {
            $codedValue = $hvCodable->getCode();
            $codedValue->setValue($code);
            $codedValue->setFamily($vocabularyFamily);
            $codedValue->setType($vocabularyName);
        }
        
        return $code;
    }
    
    protected function getThingDateStr(Date $hvDate)
    {
        return DateTimeUtils::getThingDateStr($hvDate);
    }
    
    protected function getThingDate(Date $hvDate = NULL)
    {
        return DateTimeUtils::getThingDate($hvDate);
    }
    
    
    protected function setThingDate(Date $hvDate, $date) {
        $result = DateTimeUtils::setThingDate($hvDate, $date);
        
        return ( $result ) ? $this : FALSE;
    }
    
    protected function getThingDatetime(DateTime $hvDatetime = NULL)
    {
        return DateTimeUtils::getThingDatetime($hvDatetime);
    }
    
    protected function setThingDatetime(DateTime $hvDatetime, $datetime)
    {
        $result = DateTimeUtils::setThingDatetime($hvDatetime, $datetime);
        
        return ( $result ) ? $this : FALSE;
    }
    
    protected function setThingApproxDate(ApproxDateTime $hvDate, $date)
    {
        $result = DateTimeUtils::setThingApproxDate($hvDate, $date);
        
        return ( $result ) ? $this : FALSE;
    }
    
    protected function getThingApproxDate(ApproxDateTime $hvDate = NULL)
    {
        return DateTimeUtils::getThingApproxDate($hvDate);
    }
    
    protected function setThingApproxDateTime(ApproxDateTime $hvDate, $date)
    {
        $result = DateTimeUtils::setThingApproxDateTime($hvDate, $date);
        
        return ( $result ) ? $this : FALSE;
    }
    
    protected function getThingApproxDateTime(ApproxDateTime $hvDate = NULL)
    {
        return DateTimeUtils::getThingApproxDateTime($hvDate);
    }
    
    /**
     * Gets a list of fields to display
     * 
     * @return array of keys (field names) and values (field headings)
     */
    public static function getDisplayFields()
    {
        return array(
        );
    }
    
    /**
     * Returns a BlobStore for the thing.
     * 
     * If no thing already exists then one will be created. If the intention is to use a real
     * Thing object then this should be set before calling this method.
     * 
     * @return BlobStore
     */
    public function getBlobStore() {
        $thing = $this->getThing();
        
        if ( ! isset($this->blobStoreFactory) )
        {
            return NULL;
        }
        
        return $this->blobStoreFactory->getBlobStore($thing);
    }
    
    public function getCreated() {
        if ( ! $this->thing )
        {
            return FALSE;
        }
        
        $created = $this->thing->getCreated();
        if ( ! empty($created) ) {
            $created = $created->getTimestamp();
        } else {
            $created = $this->thing->getEffDate()->getValue();
        } 
        
        if ( ! empty($created) )
        {
            return strtotime($created);
        }
        // else 
        return NULL;
    }
    
    public function addBlob(Blob $blob) {
        $blobStore = $this->getBlobStore();
        
        return $blobStore->addBlob($blob);
    }
    
    public function removeBlob(Blob $blob) {
        $blobStore = $this->getBlobStore();
        
        return $blobStore->removeBlob($blob);
    }
    
    public function getBlobs() {
        $blobStore = $this->getBlobStore();
        
        return $blobStore; // This is an iterable
    }
    
    public function getExtensions() {
        return $this->extensions;
    }
    
    public function addExtension(Extension $extension) {
        $this->extensions[] = $extension;
        
        return $this;
    }
    
    public function removeExtension(Extension $extension) {
        foreach ($this->extensions as $index => $thisExtension) {
            if ($thisExtension == $extension) {
                unset($this->extensions[$index]);
                
                return;
            }
        }
    }
    
    public function getExtension($source) {
        foreach ($this->extensions as $thisExtension) {
            if ($thisExtension->getSource() == $source) {
                return $thisExtension;
            }
        }
        
        return NULL;
    }
    
    public function replaceExtension($source, Extension $extension) {
        $possibilities = array();

        foreach ($this->extensions as $index => $thisExtension) {
            if ($thisExtension->getSource() == $source) {
                $possibilities[] = $index;
            }
        }
        
        if (count($possibilities) != 1) {
            return FALSE;
        }
        
        $this->extensions[$index] = $extension;
        
        return TRUE;
    }
}
