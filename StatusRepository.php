<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;

use Doctrine\ORM\EntityRepository;

class StatusRepository extends EntityRepository
{
    public function findByUser(\Illumina\HealthvaultSecurityBundle\Entity\User $user)
    {
        $statustypes = $this->getEntityManager()->getRepository('IlluminaUnderstandingMyHealthBundle:Statustype')->findByUser($user);
        
        // This is a little backward, so ...
        $statuses = array();
        
        foreach ($statustypes as $statustype) {
            $status = $statustype->getStatuses()->first();
            
            if ( ! $status ) {
                $status = new Status();
                $status->setUser($user);
                $status->setStatustype($statustype);
            }
        
            $statuses[] = $status;
        }
        
        return $statuses;
    }
}