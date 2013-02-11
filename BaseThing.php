<?php
namespace Illumina\HealthTrackingbundle\Entity;

use com\microsoft\wc\thing\Thing;
use Illumina\PhphealthvaultBundle\DependencyInjection\HealthvaultVocabulary;
use com\microsoft\wc\thing\DataXml;

use com\microsoft\wc\dates\DateTime;
use com\microsoft\wc\dates\ApproxDateTime;
use com\microsoft\wc\types\CodableValue;

abstract class BaseThing
{
    /**
     * @var \com\microsoft\wc\thing\thing\Thing
     */
    protected $thing;
    
    /**
     * @var \Illumina\PhphealthvaultBundle\DependencyInjection\HealthvaultVocabulary
     */
    protected $healthvaultVocabulary;
    
    /**
     * @var string
     */
    protected $notes;
    
    /**
     * @var string;
     */
    protected $name;
    
    public function __construct(Thing $thing = NULL, HealthvaultVocabulary $healthvaultVocabulary = NULL)
    {
        if ($thing) {
            $this->setThing($thing);
        }
    
        if ($healthvaultVocabulary) {
            $this->setHealthvaultVocabulary($healthvaultVocabulary);
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
     * @return the Thing
     */
    public function getThing(Thing $thing = NULL)
    {
        if (empty($thing) && empty($this->thing))
        {
            $thing = new Thing();
        }
        
        if ( ! empty($thing) )
        {
            $this->thing = $thing;
        }
        
        return $this->thing;
    }
    
    /**
     * @param  $thing
     */
    public function setThing(Thing $thing)
    {
        if ( ! self::supports($thing) ) {
            return FALSE;
        }
        
        $this->thing = $thing;
        
        $thing->setThingNotes($this->notes);
    
        return $this;
    }
    
    protected function getThingNotes()
    {
        $payloadArea = $this->getThingPayloadArea();
        
        $this->notes = $payloadArea->getCommon()->getNote();
        
        return $this;
    }

    protected function setThingNotes($notes)
    {
        $payloadArea = $this->getThingPayloadArea();
        
        $hvCommon = $payloadArea->getCommon();
        $hvCommon->setNote($notes);
        
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
    public function setHealthvaultVocabulary($healthvaultVocabulary)
    {
        $this->healthvaultVocabulary = $healthvaultVocabulary;
    
        return $this;
    }
    
    public static function supports(Thing $thing) {
        // return ($thing->getTypeId()->getValue() == BloodGlucose::ID);
        return FALSE;
    }
    
    public function getVersion() {
        if ( ! $this->thing )
        {
            return FALSE;
        }
    
        return $this->thing->getThingId()->getVersionStamp();
    }
    
    public function setVersion($version) {
        if ( ! empty($version) && $this->thing )
        {
            $this->thing->getThingId()->setVersionStamp($version);
        }
    
        return $this;
    }
    
    public function getId()
    {
        if ( ! $this->thing )
        {
            return FALSE;
        }
    
        return $this->thing->getThingId()->getValue();
    }
    
    public function getName() {
        return $this->name;
    }
    
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
        return $hvDatetime->getDate() . ' ' . $hvDatetime->getTime();
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
    
}
