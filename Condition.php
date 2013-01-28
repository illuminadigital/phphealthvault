<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Illumina\PhphealthvaultBundle\Validator\Constraints as Validate;

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
        
        return $this;
    }
    
    public function getCategory()
    {
        return $this->category;
    }
    
    public function setCategory($category)
    {
        $this->category = $category;
        
        return $this;
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    public function setStatus($status)
    {
        $this->status = $status;
        
        return $this;
    }
    
    public function getOnsetDate()
    {
        return $this->onsetDate;
    }
    
    public function setOnsetDate($onsetDate)
    {
        $this->onsetDate = $onsetDate;
        
        return $this;
    }
    
    public function getStopDate()
    {
        return $this->stopDate;
    }
    
    public function setStopDate($stopDate)
    {
        $this->stopDate = $stopDate;
        
        return $this;
    }
    
    public function getStopReason()
    {
        return $this->stopReason;
    }
    
    public function setStopReason($stopReason)
    {
        $this->stopReason = $stopReason;
        
        return $this;
    }
    
    public function getNotes()
    {
        return $this->notes;
    }
    
    public function setNotes($notes)
    {
        $this->notes = $notes;
        
        return $this;
    }
    
    
    static public function getPossibleCategories()
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
}
