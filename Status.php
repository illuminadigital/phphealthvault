<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="status")
 * @ORM\Entity(repositoryClass="\Illumina\UnderstandingMyHealthBundle\Entity\StatusRepository")
 * 
 * @author Alistair MacDonald <alistair.macdonald@illumina.co.uk>
 */
class Status
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Illumina\HealthvaultSecurityBundle\Entity\User")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Illumina\UnderstandingMyHealthBundle\Entity\Statustype")
     */
    protected $statustype;

    /**
     * @ORM\ManyToOne(targetEntity="Illumina\UnderstandingMyHealthBundle\Entity\Statustypeoption")
     * @ORM\JoinColumns({
     *     @ORM\JoinColumn(name="statustype_id", referencedColumnName="statustype_id"),
     *     @ORM\JoinColumn(name="value_id", referencedColumnName="value")
     * })
     */
    protected $value;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $note;

    /**
     * @ORM\Column(type="date")
     */
    protected $updated;

    /**
     * Get the ID
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get user
     * 
     * @return \Illumina\HealthvaultSecurityBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param \Illumina\HealthvaultSecurityBundle\Entity\User $user
     * @return Settings
     */
    public function setUser(
            \Illumina\HealthvaultSecurityBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value 
     * 
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set the value
     * 
     * @param integer $value
     * 
     * @return \Illumina\UnderstandingMyHealthBundle\Entity\Status
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get the note 
     * 
     * @return integer
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the note
     * 
     * @param string $note
     * 
     * @return \Illumina\UnderstandingMyHealthBundle\Entity\Status
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the updated
     * 
     * @return integer
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set the updated
     * 
     * @param integer $updated
     * 
     * @return \Illumina\UnderstandingMyHealthBundle\Entity\Status
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    public function getStatustype()
    {
        return $this->statustype;
    }

    public function setStatustype($statustype)
    {
        $this->statustype = $statustype;
        
        return $this;
    }

}
