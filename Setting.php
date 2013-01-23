<?php
namespace Illumina\AbpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="settings")
 * @ORM\Entity(repositoryClass="Illumina\AbpBundle\Entity\SettingRepository")
 */
class Setting
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=64)
	 */
	protected $name;
	
	/**
	 * @ORM\Column(type="string", length=255)
	 */
	protected $value;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Illumina\HealthvaultSecurityBundle\Entity\User", inversedBy="settings")
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
     * Set name
     *
     * @param string $name
     * @return Settings
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Settings
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set user
     *
     * @param \Illumina\SecurityBundle\Entity\User $user
     * @return Settings
     */
    public function setUser(\Illumina\SecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Illumina\SecurityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}