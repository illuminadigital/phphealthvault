<?php
namespace Illumina\UnderstandingMyHealthBundle\Entity;

use Doctrine\ORM\EntityRepository;

class StatustypeRepository extends EntityRepository
{
    public function findByActive() {
        $statustypes = $this->getEntityManager()
            ->createQuery('
SELECT 
    t, 
    o 
FROM 
    IlluminaUnderstandingMyHealthBundle:Statustype t 
    JOIN IlluminaUnderstandingMyHealthBundle:Statustypeoption o
WHERE
    t.active = TRUE
')
            ->getResult();
        
        return $statustypes;
    }
    
    public function findByName($name) {
        $statustype = $this->getEntityManager()
            ->createQuery('
SELECT
    t,
    o
FROM
    IlluminaUnderstandingMyHealthBundle:Statustype t
    JOIN IlluminaUnderstandingMyHealthBundle:Statustypeoption o
WHERE
    t.name = :name
')
            ->setParameter('name', $name)
            ->getOneOrNullResult();
        
        return $statustype;
        
    }
    
    public function findByUser(\Illumina\HealthvaultSecurityBundle\Entity\User $user) {
        $statuses = $this->getEntityManager()
            ->createQuery('
SELECT
    t,
    o,
    s
FROM
    IlluminaUnderstandingMyHealthBundle:Statustype t
    JOIN t.options o
    LEFT JOIN t.statuses s WITH (s.user = :user)
WHERE
    t.active = TRUE
')
            ->setParameter('user', $user)
            ->getResult();
    
        return $statuses;
    }
    
}
