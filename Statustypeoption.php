<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="statustypeoption")
 * @ORM\Entity()
 * 
 * @author Alistair MacDonald <alistair.macdonald@illumina.co.uk>
 */
class Statustypeoption
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="\Illumina\UnderstandingMyHealthBundle\Entity\Statustype", inversedBy="options")
     */
    protected $statustype;

    /**
     * @ORM\Column(type="integer")
     */
    protected $value;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $label;

    /**
     * @ORM\Column(type="integer")
     */
    protected $sequence;

    public function __construct($label = NULL, $value = NULL, $sequence = NULL, $statustype = NULL)
    {
        $this->setLabel($label);
        $this->setValue($value);
        $this->setSequence($sequence);

        if ( ! empty($statustype) ) {
            $this->setStatustype($statustype);
        }
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \Illumina\UnderstandingMyHealthBundle\Entity\Statustype
     */
    public function getStatustype()
    {
        return $this->statustype;
    }

    /**
     * @param \Illumina\UnderstandingMyHealthBundle\Entity\Statustype $statustype
     */
    public function setStatustype(\Illumina\UnderstandingMyHealthBundle\Entity\Statustype $statustype)
    {
        $this->statustype = $statustype;
        
        return $this;
    }

    /**
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param integer $value
     */
    public function setValue($value)
    {
        $this->value = $value;
        
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
        
        return $this;
    }

    /**
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * @param integer $sequence
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        
        return $this;
    }
}
