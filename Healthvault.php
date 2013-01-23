<?php
namespace Illumina\AbpBundle\Entity;

use Illumina\PhphealthvaultBundle\Entity\HealthvaultDetailProvider;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="healthvault")
 * @ORM\Entity(repositoryClass="Illumina\AbpBundle\Entity\HealthvaultRepository")
 */
class Healthvault implements HealthvaultDetailProvider {
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=40)
	 */
	protected $personId;
	
	/**
	 * @ORM\Column(type="string", length=40)
	 */
	protected $recordId;
	
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected $email;
	
	/**
	 * @ORM\OneToOne(targetEntity="Illumina\HealthvaultSecurityBundle\Entity\User", inversedBy="healthvault");
	 */
	protected $user;

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
     * Set personId
     *
     * @param string $personId
     * @return Healthvault
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
    
        return $this;
    }

    /**
     * Get personId
     *
     * @return string 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set recordId
     *
     * @param string $recordId
     * @return Healthvault
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;
    
        return $this;
    }

    /**
     * Get recordId
     *
     * @return string 
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Set user
     *
     * @param \Illumina\HealthvaultSecurityBundle\Entity\User $user
     * @return Healthvault
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
    
    /**
     * Set email
     *
     * @param string $email
     * @return Healthvault
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
     * Do we have enough information to think that this user is connected to the Healthvault
     * 
     * @return boolean
     */
    public function isConnected()
    {
    	return ( ! (empty($this->personId) || empty($this->recordId)) );
    }
    
    public function getWctoken()
    {
    	return '';
    }
}