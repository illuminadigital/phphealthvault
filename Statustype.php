<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Table(name="statustype")
 * @ORM\Entity(repositoryClass="\Illumina\UnderstandingMyHealthBundle\Entity\StatustypeRepository")
 * 
 * @author Alistair MacDonald <alistair.macdonald@illumina.co.uk>
 */
class Statustype
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $shortname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="\Illumina\UnderstandingMyHealthBundle\Entity\Statustypeoption", mappedBy="statustype", cascade={"persist"})
     */
    protected $options;
    
    /**
     * @ORM\OneToMany(targetEntity="\Illumina\UnderstandingMyHealthBundle\Entity\Status", mappedBy="statustype")
     */
    protected $statuses;
    
    public function __construct()
    {
        $this->options = new ArrayCollection();
        $this->statuses = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

    public function getShortname()
    {
        return $this->shortname;
    }

    public function setShortname($shortname)
    {
        $this->shortname = $shortname;
        
        return $this;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
        
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function addOption(\Illumina\UnderstandingMyHealthBundle\Entity\Statustypeoption $option)
    {
        $this->options[] = $option;
        
        return $this;
    }

    public function getStatuses()
    {
        return $this->statuses;
    }

    public function addStatuses(\Illumina\UnderstandingMyHealthBundle\Entity\Status $status)
    {
        $this->statuses[] = $status;
        
        return $this;
    }

}
