<?php
namespace Illumina\PhphealthvaultBundle\Entity;

interface HealthvaultDetailProvider
{
    /**
     * Returns the GUID string for the Record being accessed
     * 
     * @return string
     */
	public function getRecordId();
	
    /**
     * Returns the GUID string for the Person who is accessing Healthvault
     * 
     * @return string
     */
	public function getPersonId();
	
	/**
	 * Returns the token that Healthvault supplied upon authentication
	 * 
	 * @return string
	 */
	public function getWcToken();
}