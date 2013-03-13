<?php
namespace DLS\Healthvault\Proxy\Thing;

use com\microsoft\wc\thing\Thing2;
use com\microsoft\wc\thing\DataXml;

use com\microsoft\wc\dates\DateTime;
use com\microsoft\wc\dates\ApproxDateTime;
use com\microsoft\wc\types\CodableValue;

use DLS\Healthvault\Utilities\VocabularyInterface;
use DLS\Healthvault\Blob\BlobStoreFactory;

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
     * @var string;
     */
    protected $name;
    
    /**
     * @var string
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $version;
    
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
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return the Thing
     */
    public function getThing(Thing2 $thing = NULL)
    {
        if (empty($thing) && empty($this->thing))
        {
            $thing = new Thing();
        }
        
        if ( ! empty($thing) )
        {
            $this->thing = $thing;
        }
        
        $this->setThingId($this->id);
        $this->setThingVersion($this->version);
        $this->setThingNotes($this->notes);
        
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
    
    protected function getThingDatetime(\com\microsoft\wc\dates\DateTime $hvDatetime)
    {
        $date = $hvDatetime->getDate();
        $time = $hvDatetime->getTime();
        
        return sprintf('%d-%02d-%02d %d:%02d:%02d', 
                $date->getY()->getValue(), $date->getM()->getValue(), $date->getD()->getValue(),
                $time->getH()->getValue(), $time->getM()->getValue(), $time->getS()->getValue()
        );
    }
    
    protected function setThingDatetime(DateTime $hvDatetime, $datetime)
    {
        if ( ! $datetime instanceof \DateTime ) {
            $datetime = new \DateTime($datetime);
        }
        
        if ( ! $datetime instanceof \DateTime ) {
            return FALSE;
        }

        $date = $hvDatetime->getDate();
        $date->getY()->setValue((int)$datetime->format('Y'));
        $date->getM()->setValue((int)$datetime->format('m'));
        $date->getD()->setValue((int)$datetime->format('d'));
        
        $time = $hvDatetime->getTime();
        $time->getH()->setValue((int)$datetime->format('H'));
        $time->getM()->setValue((int)$datetime->format('i'));
        $time->getS()->setValue((int)$datetime->format('s'));
        
        return $this;
    }
    
    protected function setThingApproxDate(ApproxDateTime $hvDate, $date)
    {
        if ( ! empty($date) && ! $date instanceof \DateTime) {
            try {
                $date = new \DateTime($date);
            }
            catch (\Exception $e) {
                error_log('Failed to convert date to DateTime: ' . print_r($date, TRUE));
            }
        }
    
        if ( ! empty($date) ) {
            $structuredDate = $hvDate->getStructured()->getDate();
            $structuredDate->getY()->setValue((int) $date->format('Y'));
            $structuredDate->getM()->setValue((int) $date->format('m'));
            $structuredDate->getD()->setValue((int) $date->format('d'));
        }
        /*
         else if ( empty($date) ) {
        $hvDate->getStructured()->setDate(NULL); // Will be rebuilt on next request
        }
        */
    }
    
    protected function getThingApproxDate(ApproxDateTime $hvDate)
    {
        $structuredDate = $hvDate->getStructured()->getDate();
    
        $y = $structuredDate->getY()->getValue();
        $m = $structuredDate->getM()->getValue();
        $d = $structuredDate->getD()->getValue();
    
        if ( ! empty($y) && ! empty($m) && ! empty($d)) {
            $dateObj = new \DateTime();
            $dateObj->setDate($y, $m, $d);
            return $dateObj;
        }
    
        return NULL;
    }
    
    protected function setThingApproxDateTime(ApproxDateTime $hvDate, $date)
    {
        if ( ! empty($date) && ! $date instanceof \DateTime) {
            try {
                $date = new \DateTime($date);
            }
            catch (\Exception $e) {
                error_log('Failed to convert date to DateTime: ' . print_r($date, TRUE));
            }
        }
    
        if ( ! empty($date) ) {
            $structuredDate = $hvDate->getStructured()->getDate();
            $structuredDate->getY()->setValue((int) $date->format('Y'));
            $structuredDate->getM()->setValue((int) $date->format('m'));
            $structuredDate->getD()->setValue((int) $date->format('d'));

        
            $time = $hvDate->getStructured()->getTime();
            $time->getH()->setValue( (int) $date->format('H'));
            $time->getM()->setValue( (int) $date->format('i'));
            $time->getS()->setValue( (int) $date->format('s'));
        }
        
        /*
         else if ( empty($date) ) {
        $hvDate->getStructured()->setDate(NULL); // Will be rebuilt on next request
        }
        */
    }
    
    protected function getThingApproxDateTime(ApproxDateTime $hvDate)
    {
        $structuredDate = $hvDate->getStructured()->getDate();
        $structuredTime = $hvDate->getStructured()->getTime();
        
        $y = $structuredDate->getY()->getValue();
        $m = $structuredDate->getM()->getValue();
        $d = $structuredDate->getD()->getValue();
        
        $h = $structuredTime->getH()->getValue();
        $i = $structuredTime->getM()->getValue();
        $s = $structuredTime->getS()->getValue();
        
        if ( ! empty($y) && ! empty($m) && ! empty($d)) {
            $dateObj = new \DateTime();
            $dateObj->setDate($y, $m, $d);
            $dateObj->setTime($h, $i, $s);
            return $dateObj;
        }
    
        return NULL;
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
}
