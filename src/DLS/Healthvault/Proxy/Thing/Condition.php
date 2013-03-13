<?php
namespace DLS\Healthvault\Proxy\Thing;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use DLS\Healthvault\Utilities\VocabularyInterface;

use com\microsoft\wc\thing\condition\Condition as HealthvaultCondition;
use com\microsoft\wc\thing\Thing;
use com\microsoft\wc\thing\DataXml;
use com\microsoft\wc\types\CodedValue;
use com\microsoft\wc\types\CodableValue;

class Condition
{
    /**
     * @Assert\NotBlank
     * @var string
     */
    protected $name;
    
    /* @Assert\Choice(callback="getPossibleCategories") */
    /**
     * @Assert\NotBlank()
     * 
     * @var string
     */
    protected $category;
    
    /**
     * @Assert\NotBlank()
     * @Validate\InHealthvaultVocabulary("condition-occurrence")
     * @var string
     */
    protected $status;
    
    /**
     * @Assert\Date
     * @var date
     */
    protected $onsetDate;
    
    /**
     * @Assert\Date
     * @var date
     */
    protected $stopDate;
    
    /**
     * @var string
     */
    protected $stopReason;
    
    /**
     * @var string
     */
    protected $notes;
    
    /**
     * @var \com\microsoft\wc\thing\thing\Thing
     */
    protected $hvCondition;
    
    /**
     * @var \DLS\Healthvault\Utilities\VocabularyInterface;
     */
    protected $healthvaultVocabulary;
    
    public function __construct(Thing $hvCondition = NULL, VocabularyInterface $healthvaultVocabulary = NULL)
    {
        if ($hvCondition) {
            $this->setHealthvaultCondition($hvCondition);
        }
        
        if ($healthvaultVocabulary) {
            $this->setHealthvaultvocabulary($healthvaultVocabulary);
        }
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
        
        if ($this->hvCondition) {
            $this->setHealthvaultName($name);
        }
        
        return $this;
    }
    
    public function getCategory()
    {
        return $this->category;
    }
    
    public function setCategory($category)
    {
        $this->category = $category;

        if ($this->hvCondition) {
            $this->setHealthvaultCategory($category);
        }

        return $this;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
        
        if ($this->hvCondition) {
            $this->setHealthvaultStatus($status);
        }
        
        return $this;
    }
    
    public function getOnsetDate()
    {
        return $this->onsetDate;
    }
    
    public function setOnsetDate($onsetDate)
    {
        $this->onsetDate = $onsetDate;
        
        if ($this->hvCondition) {
            $this->setHealthvaultOnsetDate($onsetDate);
        }
        
        return $this;
    }
    
    public function getStopDate()
    {
        return $this->stopDate;
    }
    
    public function setStopDate($stopDate)
    {
        $this->stopDate = $stopDate;
        
        if ($this->hvCondition) {
            $this->setHealthvaultStopDate($stopDate);
        }
        
        return $this;
    }
    
    public function getStopReason()
    {
        return $this->stopReason;
    }
    
    public function setStopReason($stopReason)
    {
        $this->stopReason = $stopReason;
        
        if ($this->hvCondition) {
            $this->setHealthvaultStopReason($stopReason);
        }
        
        return $this;
    }
    
    public function getNotes()
    {
        return $this->notes;
    }
    
    public function setNotes($notes)
    {
        $this->notes = $notes;
        
        if ($this->hvCondition) {
            $this->setHealthvaultNotes($notes);
        }
        
        return $this;
    }
       
    public static function getPossibleCategories()
    {
        return array(
            'Lorem ipsum dolor sit amet.',
            'Aliquam facilisis turpis.',
            'In at nibh a ipsum.',
            'Pellentesque malesuada porta.',
            'Quisque vehicula dui quis.',
            'Etiam vitae odio et risus.',
            'Duis pharetra enim ut.',
            'Integer ac lacus risus.',
        );
    }
    
    public static function supports(Thing $thing)
    {
        return ($thing->getTypeId()->getValue() == HealthvaultCondition::ID);
    }
        
    public function getVersion() {
        if ( ! $this->hvCondition )
        {
            return FALSE;
        }
        
        return $this->hvCondition->getThingId()->getVersionStamp();
    }
    
    public function setVersion($version) {
        if ( ! empty($version) && $this->hvCondition )
        {
            $this->hvCondition->getThingId()->setVersionStamp($version);
        }
        
        return $this;
    }
    
    public function getId()
    {
        if ( ! $this->hvCondition )
        {
            return FALSE;
        }
        
        return $this->hvCondition->getThingId()->getValue();
    }
    
    
    public function setHealthvaultCondition(Thing $hvCondition)
    {
        if ( ! self::supports($hvCondition) )
        {
            return FALSE;
        }
        
        $this->hvCondition = $hvCondition;
        
        $payloadArea = $this->getHealthvaultPayloadArea();
        $payload = $this->getHealthvaultPayload();
        
        $this->name = $payload->getName()->getText();
        $this->onsetDate = $this->getHealthvaultDate($payload->getOnsetDate());
        $this->stopDate = $this->getHealthvaultDate($payload->getStopDate());
        $this->stopReason = $payload->getStopReason();
        
        $codes = $payload->getStatus()->getCode();
        $code = array_shift($codes);
        
        $this->status = $code->getValue();
        
        $this->notes = $payloadArea->getCommon()->getNote();
        // $this->category = ?
        
        return TRUE;
    }
    
    public function getHealthvaultCondition(Thing $hvCondition = NULL)
    {
        if ( empty($hvCondition) && empty($this->hvCondition) )
        {
            $hvCondition = new Thing();
        }
        
        if ( ! empty($hvCondition) ) 
        {
            $this->hvCondition = $hvCondition;
        }
        
        $this->setHealthvaultName($this->name);
        $this->setHealthvaultCategory($this->category);
        $this->setHealthvaultStatus($this->status);
        $this->setHealthvaultOnsetDate($this->onsetDate);
        $this->setHealthvaultStopDate($this->stopDate);
        $this->setHealthvaultStopReason($this->stopReason);
        $this->setHealthvaultNotes($this->notes);
        
        return $this->hvCondition;
    }
    
    protected function getHealthvaultPayload()
    {
        $payloadWrapper = $this->getHealthvaultPayloadArea();
        
        $payloadContentArr = $payloadWrapper->getAny();
        $payloadContent = array_shift($payloadContentArr);
        
        return $payloadContent;
    }
    
    protected function getHealthvaultPayloadArea()
    {
        $data = $this->hvCondition->getDataXml();
        
        if ( ! empty($data) )
        {
            $payloadWrapper = array_shift($data);
        }
        else
        {
            $payloadWrapper = new DataXml();
            $payloadWrapper->addAny(new HealthvaultCondition());

            $this->hvCondition->addDataXml($payloadWrapper);
        }
        
        return $payloadWrapper;
    }
    
    protected function setHealthvaultName($name)
    {
        // FIXME: Get Category list(!)
        return $this->setHealthvaultCodableValue($this->getHealthvaultPayload()->getName(), $name, array());
    }
    
    protected function setHealthvaultCodableValue(CodableValue $hvCodable, $value, $vocabularies = array())
    {
        $code = FALSE;
        
        if ($this->healthvaultVocabulary) {
            // Try to lookup the code
        
            foreach ($vocabularies as $vocabulary) {
                if (is_array($vocabulary)) {
                    $vocabularyName = array_shift($vocabulary);
                    $vocabularyFamily = (empty($vocabulary) ? 'wc' : array_shift($vocabulary));
                } else {
                    $vocabularyName = (string) $vocabulary;
                    $vocabularyFamily = 'wc';
                }
        
                $code = $this->healthvaultVocabulary($value, $vocabularyName, $vocabularyFamily);
        
                if ($code) {
                    break;
                }
            }
        }
        
        $hvCodable->setText($value);
        
        if ($code) {
            $codedValue = $hvCodable->getCode();
            $codedValue->setValue($code);
            $codedValue->setFamily($vocabularyFamily);
            $codedValue->setType($vocabularyName);
        }
        
        return $code;
    }
    
    protected function setHealthvaultCategory($category)
    {
        // FIXME: Where does this map?
    }
    
    protected function setHealthvaultOnsetDate($onsetDate)
    {
        $hvOnsetDate = $this->getHealthvaultPayload()->getOnsetDate();
        
        $this->setHealthvaultDate($hvOnsetDate, $onsetDate);
    }
    
    protected function setHealthvaultStopDate($stopDate)
    {
        if ( ! empty($stopDate) )
        {
            $hvStopDate = $this->getHealthvaultPayload()->getStopDate();
            
            $this->setHealthvaultDate($hvStopDate, $stopDate);
        }
        else
        {
            $this->getHealthvaultPayload()->setStopDate(NULL);
        }
    }
    
    protected function setHealthvaultStopReason($stopReason)
    {
        $this->getHealthvaultPayload()->setStopReason($stopReason);
    }   
    
    protected function setHealthvaultStatus($status)
    {
        $hvStatus = $this->getHealthvaultPayload()->getStatus();
        $hvCodes = $hvStatus->getCode();
        
        if ( ! empty($hvCodes) )
        {
            $hvCode = array_shift($hvCodes);
        }
        else
        {
            $hvCode = new CodedValue();
            $hvCode->setFamily('wc');
            $hvCode->setType('condition-occurrence');
            $hvStatus->addCode($hvCode);
        }
        
        $hvCode->setValue($status);
        
        if ($this->healthvaultVocabulary) {
            $vocabulary = $this->healthvaultVocabulary->get('condition-occurrence');
            
            if ($vocabulary && array_key_exists($status, $vocabulary)) {
                $hvStatus->setText($vocabulary[$status]);
            }
        }
    }

    protected function setHealthvaultNotes($notes)
    {
        $payloadArea = $this->getHealthvaultPayloadArea();
        
        $hvCommon = $payloadArea->getCommon();
        $hvCommon->setNote($notes);
    }
    
    protected function setHealthvaultDate(\com\microsoft\wc\dates\ApproxDateTime $hvDate, $date)
    {
        error_log('Setting date: ' . print_r($date, TRUE));
        
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
    
    protected function getHealthvaultDate(\com\microsoft\wc\dates\ApproxDateTime $hvDate)
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
    
    public function setHealthvaultVocabulary(VocabularyInterface $healthvaultVocabulary)
    {
        $this->healthvaultVocabulary = $healthvaultVocabulary;
    }
}
