<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

use com\microsoft\wc\thing\condition\Condition as HealthvaultCondition;
use com\microsoft\wc\thing\Thing;

class Condition
{
    /**
     * @Assert\NotBlank
     * @var string
     */
    protected $name;
    
    /**
     * @Assert\Choice(callback="getPossibleCategories")
     * @var string
     */
    protected $category;
    
    /**
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
    
    public function __construct(Thing $hvCondition = NULL)
    {
        if ($hvCondition) {
            $this->setHealthvaultCondition($hvCondition);
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
        
        $payload = $this->getHealthvaultPayload();
        
        $this->name = $payload->getName()->getText();
        $this->onsetDate = $this->getHealthvaultDate($payload->getOnsetDate());
        $this->stopDate = $this->getHealthvaultDate($payload->getStopDate());
        $this->stopReason = $payload->getStopReason();
        
        $codes = $payload->getStatus()->getCode();
        $code = array_shift($codes);
        
        $this->status = $code->getValue();
        $dataXml = $this->hvCondition->getDataXml();
        $payloadArea = array_shift($dataXml);
        $this->notes = $payloadArea->getCommon()->getNote();
        // $this->category = ?
        
        return TRUE;
    }
    
    public function getHealthvaultCondition(HealthvaultCondition $hvCondition = NULL)
    {
        if ( ! $hvCondition && ! $this->hvCondition )
        {
            $hvCondition = new HealthvaultCondition();
            $this->hvCondition = $hvCondition;
        }
        
        $this->setHealthvaultCategory($this->category);
        $this->setHealthvaultStatus($this->status);
        $this->setHealthvaultOnsetDate($this->onsetDate);
        $this->setHealthvaultStopDate($this->stopDate);
        $this->setHealthvaultStopReason($this->stopReason);
        $this->setHealthvaultNotes($this->notes);
        
        return $hvCondition;
    }
    
    protected function getHealthvaultPayload()
    {
        $data = $this->hvCondition->getDataXml();
        $payloadWrapper = array_shift($data);
        $payloadContentArr = $payloadWrapper->getAny();
        $payloadContent = array_shift($payloadContentArr);
        
        return $payloadContent;
    }
    
    protected function setHealthvaultName($name)
    {
        $hvName = $this->getHealthvaultPayload()->getName();
        $hvName->setText($name);
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
        $hvStopDate = $this->getHealthvaultPayload()->getStopDate();
        
        $this->setHealthvaultDate($hvStopDate, $stopDate);
    }
    
    protected function setHealthvaultStopReason($stopReason)
    {
        $this->getHealthvaultPayload()->setStopReason($stopReason);
    }   
    
    protected function setHealthvaultStatus($status)
    {
        $hvStatus = $this->getHealthvaultPayload()->getStatus();
        $hvStatus->setCode($status);
    }

    protected function setHealthvaultNotes($notes)
    {
        $hvCommon = $this->hvCondition->getDataXml()->getCommon();
        $hvCommon->setNote($notes);
    }
    
    protected function setHealthvaultDate(\com\microsoft\wc\dates\ApproxDateTime $hvDate, $date)
    {
        if ( ! $date instanceof \DateTime) {
            try {
                $dateObj = new \DateTime($date);
                
                $structuredDate = $hvDate->getStructured()->getDate();
                $structuredDate->getY()->setValue($dateObj->format('Y'));
                $structuredDate->setM()->setValue($dateObj->format('m'));
                $structuredDate->setD()->setValue($dateObj->format('d'));
            }
            catch (\Exception $e) {
                error_log('Failed to convert date to DateTime: ' . print_r($date, TRUE));
            }
        }
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
}
