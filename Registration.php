<?php
namespace Illumina\AbpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Illumina\HealthvaultSecurityBundle\Entity\User;

/**
 * @author Alistair MacDonald <alistair.macdonald@illumina.co.uk>
 * 
 * @ORM\Table(name="registration")
 * @ORM\Entity()
 *
 */
class Registration
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToOne(targetEntity="Illumina\HealthvaultSecurityBundle\Entity\User", inversedBy="registration")
     */
    protected $user;
    
    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     * @Assert\Email()
     */
    protected $email;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Assert\Type(type="bool")
     */
    protected $receiveNewsletter;
    
    /**
     * @Assert\Type(type="bool")
     * @var boolean
     */
    protected $provideData;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Registration
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set receiveNewsletter
     *
     * @param boolean $receiveNewsletter
     * @return Registration
     */
    public function setReceiveNewsletter($receiveNewsletter)
    {
        $this->receiveNewsletter = $receiveNewsletter;
    
        return $this;
    }

    /**
     * Get receiveNewsletter
     *
     * @return boolean 
     */
    public function getReceiveNewsletter()
    {
        return $this->receiveNewsletter;
    }

    /**
     * Set provideData
     *
     * @param boolean $provideData
     * @return Registration
     */
    public function setProvideData($provideData)
    {
        $this->provideData = $provideData;
    
        return $this;
    }

    /**
     * Get provideData
     *
     * @return boolean 
     */
    public function getProvideData()
    {
        return $this->provideData;
    }

    /**
     * Set user
     *
     * @param \Illumina\HealthvaultSecurityBundle\Entity\User $user
     * @return Registration
     */
    public function setUser(\Illumina\HealthvaultSecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
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
}